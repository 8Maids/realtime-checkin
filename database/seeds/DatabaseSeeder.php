<?php

use Illuminate\Database\Seeder;
use App\Model\booking;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(booking::class,10)->create();
    }
}
