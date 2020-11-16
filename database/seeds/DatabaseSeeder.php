<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\SQL_seeders\vins_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Vin table seeded !');

        $path = 'database\seeds\SQL_seeders\producteurs_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Producteur table seeded !');

        $path = 'database\seeds\SQL_seeders\recoltes_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Recolte table seeded ! Au boulot maintenant !');
    }
}
