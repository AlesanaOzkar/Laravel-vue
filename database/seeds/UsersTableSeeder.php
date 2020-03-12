<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'AlesanaOzkar';

        $user->email = 'oscar1@gmail.com';

        $user->password = '$2y$10$kLBYTGx8O3O75ntoZtabh.pstFxTZNRrj59sggBiOq6fRSl9l7Zu2';

        $user->save(); 

    }
}
