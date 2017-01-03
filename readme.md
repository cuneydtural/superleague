# TFF Süper Lig Puan Cetveli

#### Gereksinimler

- PHP >=7.0.0
- DomCrawler\Crawler

#### Kurulum

```sh
composer require cuneydtural/superleague
```

#### Service Provider

```sh
Tural\SuperLeague\SuperLeagueServiceProvider::class
```

#### Facedes

```sh
'SuperLeague' => \Tural\SuperLeague\Facades\SuperLeagueFacade::class
```

#### Vendor Publish

```sh
php artisan vendor:publish
```

#### Kullanım

```sh
SuperLeague::generate()
```

#### JSON Çıktı

```sh
[
  {
    "list_id": 1,
    "team_name": "Medipol Başakşehir",
    "slug": "medipol-basaksehir",
    "matches_played": 16,
    "wins": 10,
    "draws": 6,
    "losses": 0,
    "points": 36,
    "team_logo": "/vendor/superleague/logos/medipol-basaksehir.png"
  },
  {
    "list_id": 2,
    "team_name": "Beşiktaş",
    "slug": "besiktas",
    "matches_played": 16,
    "wins": 10,
    "draws": 5,
    "losses": 1,
    "points": 35,
    "team_logo": "/vendor/superleague/logos/besiktas.png"
  },
  {
    "list_id": 3,
    "team_name": "Galatasaray",
    "slug": "galatasaray",
    "matches_played": 16,
    "wins": 10,
    "draws": 3,
    "losses": 3,
    "points": 33,
    "team_logo": "/vendor/superleague/logos/galatasaray.png"
  },
  {
    "list_id": 4,
    "team_name": "Fenerbahçe",
    "slug": "fenerbahce",
    "matches_played": 16,
    "wins": 9,
    "draws": 4,
    "losses": 3,
    "points": 31,
    "team_logo": "/vendor/superleague/logos/fenerbahce.png"
  },
  {
    "list_id": 5,
    "team_name": "Bursaspor",
    "slug": "bursaspor",
    "matches_played": 16,
    "wins": 8,
    "draws": 3,
    "losses": 5,
    "points": 27,
    "team_logo": "/vendor/superleague/logos/bursaspor.png"
  },
  {
    "list_id": 6,
    "team_name": "Osmanlıspor FK",
    "slug": "osmanlispor-fk",
    "matches_played": 16,
    "wins": 6,
    "draws": 8,
    "losses": 2,
    "points": 26,
    "team_logo": "/vendor/superleague/logos/osmanlispor-fk.png"
  },
  {
    "list_id": 7,
    "team_name": "Atiker Konyaspor",
    "slug": "atiker-konyaspor",
    "matches_played": 16,
    "wins": 6,
    "draws": 6,
    "losses": 4,
    "points": 24,
    "team_logo": "/vendor/superleague/logos/atiker-konyaspor.png"
  },
  {
    "list_id": 8,
    "team_name": "Gençlerbirliği",
    "slug": "genclerbirligi",
    "matches_played": 16,
    "wins": 5,
    "draws": 7,
    "losses": 4,
    "points": 22,
    "team_logo": "/vendor/superleague/logos/genclerbirligi.png"
  },
  {
    "list_id": 9,
    "team_name": "Antalyaspor",
    "slug": "antalyaspor",
    "matches_played": 16,
    "wins": 6,
    "draws": 4,
    "losses": 6,
    "points": 22,
    "team_logo": "/vendor/superleague/logos/antalyaspor.png"
  },
  {
    "list_id": 10,
    "team_name": "Akhisar Belediyespor",
    "slug": "akhisar-belediyespor",
    "matches_played": 16,
    "wins": 5,
    "draws": 5,
    "losses": 6,
    "points": 20,
    "team_logo": "/vendor/superleague/logos/akhisar-belediyespor.png"
  },
  {
    "list_id": 11,
    "team_name": "Karabükspor",
    "slug": "karabukspor",
    "matches_played": 16,
    "wins": 5,
    "draws": 3,
    "losses": 8,
    "points": 18,
    "team_logo": "/vendor/superleague/logos/karabukspor.png"
  },
  {
    "list_id": 12,
    "team_name": "Kasımpaşa",
    "slug": "kasimpasa",
    "matches_played": 16,
    "wins": 5,
    "draws": 3,
    "losses": 8,
    "points": 18,
    "team_logo": "/vendor/superleague/logos/kasimpasa.png"
  },
  {
    "list_id": 13,
    "team_name": "Trabzonspor",
    "slug": "trabzonspor",
    "matches_played": 16,
    "wins": 5,
    "draws": 3,
    "losses": 8,
    "points": 18,
    "team_logo": "/vendor/superleague/logos/trabzonspor.png"
  },
  {
    "list_id": 14,
    "team_name": "Aytemiz Alanyaspor",
    "slug": "aytemiz-alanyaspor",
    "matches_played": 16,
    "wins": 5,
    "draws": 3,
    "losses": 8,
    "points": 18,
    "team_logo": "/vendor/superleague/logos/aytemiz-alanyaspor.png"
  },
  {
    "list_id": 15,
    "team_name": "Çaykur Rizespor",
    "slug": "caykur-rizespor",
    "matches_played": 16,
    "wins": 3,
    "draws": 4,
    "losses": 9,
    "points": 13,
    "team_logo": "/vendor/superleague/logos/caykur-rizespor.png"
  },
  {
    "list_id": 16,
    "team_name": "Kayserispor",
    "slug": "kayserispor",
    "matches_played": 16,
    "wins": 3,
    "draws": 3,
    "losses": 10,
    "points": 12,
    "team_logo": "/vendor/superleague/logos/kayserispor.png"
  },
  {
    "list_id": 17,
    "team_name": "Gaziantepspor",
    "slug": "gaziantepspor",
    "matches_played": 16,
    "wins": 3,
    "draws": 2,
    "losses": 11,
    "points": 11,
    "team_logo": "/vendor/superleague/logos/gaziantepspor.png"
  },
  {
    "list_id": 18,
    "team_name": "Adanaspor",
    "slug": "adanaspor",
    "matches_played": 16,
    "wins": 2,
    "draws": 4,
    "losses": 10,
    "points": 10,
    "team_logo": "/vendor/superleague/logos/adanaspor.png"
  }
]
```