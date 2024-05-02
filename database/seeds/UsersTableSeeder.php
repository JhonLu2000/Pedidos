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
        User::create([
           'name' =>'Jhonatan Lucero',
           'email' =>'jhonalucero123@gmail.com',
           'password' =>bcrypt('JhonLu21'),
           'admin' => true


        ]);


    }
}
