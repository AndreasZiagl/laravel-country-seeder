# laravel-country-seeder
Country Seeder for Laravel with ISO Code and Names in English, German, Spanish, French and Italian

## Tutorial to use the Laravel Country Seeder

1. Create a Country model
Use this command to create a Country model with Seeder:
```artisan make:model Country --all```

2. Copy the table definitions from ```database/migrations/create_countries_table.php``` to your file.

3. Copy the seeder from ```database/seeders/CountrySeeder.php``` to your file.

4. Regenerate database
Use this command ```php artisan migrate:fresh --seed```

## Country PHP Array
If you only want the PHP Country Array, then go to ```database/seeders/CountrySeeder.php``` line 17 and copy them.
