<?php

namespace Tural\SuperLeague;

use Symfony\Component\DomCrawler\Crawler;

class SuperLeague
{

    protected $cols = [];
    protected $scores = [];
    protected $results = [];

    public function generate()
    {

        $crawler = new Crawler($this->getHtml('http://www.trthaber.com/puandurumu.html'));

        $crawler->filter('.puandurumu ul li')->each(function (Crawler $row, $i) {
            $this->cols[] = $row->text();
        });

        $this->cols = array_slice($this->cols, 1, 18);
        foreach ($this->cols as $col) {
            $this->results = array_filter(array_map('trim', explode("\n", $col)), 'strlen');
            $this->scores[] = [
                'list_id' => $this->results[1],
                'team_name' => $this->results[2],
                'slug' => str_slug($this->results[2]),
                'matches_played' => $this->results[3],
                'wins' => $this->results[4],
                'draws' => $this->results[5],
                'losses' => $this->results[6],
                'points' => $this->results[10],
                'team_logo' => '/vendor/superleague/logos/'.str_slug($this->results[2]).'.png'
            ];
        }

        if($this->scores) {
            return $this->scores;
        } else {
            return response()->json(['message' => 'Sonuçlar alınamadı!']);
        }

    }

    public function getHtml($link)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_REFERER,"http://www.yandex.com.tr");
        $curl = curl_exec($ch);
        curl_close($ch);
        return $curl;
    }

}