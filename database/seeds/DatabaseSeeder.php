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
         $this->call(usersTableSeeder::class);
         $this->call(reservesTableSeeder::class);
         $this->call(detailsTableSeeder::class);
         $this->call(masutasTableSeeder::class);
         $this->call(roomsTableSeeder::class);


    }
}
