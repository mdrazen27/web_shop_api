<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $first_name = 'first_name';
        $last_name = 'last_name';
        $username = 'username';
        $email = 'email';
        $photo = 'photo';
        $admin = 'admin';
        $password = 'password';

        DB::table('users')->insert([
            [
                $first_name => 'Eris',
                $last_name => 'Sutkovic',
                $username => 'admineris',
                $email => 'eris@admin.com',
                $photo => '',
                $admin => 1,
                $password => bcrypt('password'),

            ],
            [
                $first_name => 'Antonije',
                $last_name => 'Knezevic',
                $username => 'adminantonije',
                $email => 'antonije@admin.com',
                $photo => '',
                $admin => 1,
                $password => bcrypt('password'),

            ],
            [
                $first_name => 'John',
                $last_name => 'Doe',
                $username => 'johndoe',
                $email => 'johndoe@user.com',
                $photo => '',
                $admin => 0,
                $password => bcrypt('password'),
            ],
            [
                $first_name => 'John2',
                $last_name => 'Doe2',
                $username => 'johndoe2',
                $email => 'johndoe2@user.com',
                $photo => '',
                $admin => 0,
                $password => bcrypt('password'),
            ],
            [
                $first_name => 'John3',
                $last_name => 'Doe3',
                $username => 'johndoe3',
                $email => 'johndoe3@user.com',
                $photo => '',
                $admin => 0,
                $password => bcrypt('password'),
            ],
        ]);

    }
}
