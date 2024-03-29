<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(ActionsTableSeeder::class);
        $this->call(ScreensTableSeeder::class);
        $this->call(LookupsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
