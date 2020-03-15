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
        factory('App\User', 50)->create();
        factory('App\Paciente', 1000)->create();
        $this->call(UsersTableSeeder::class);
       // $this->call(PacientesTableSeeder::class);
        
    }
}
