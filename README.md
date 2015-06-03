setup:

on clone:

- check ENV is correct / exists (cadence/.env.php)
- composer update (cd cadence; composer update)
- migrate tables (php artisan migate)
- seed if required (php db:seed)

- update wordpress if required
