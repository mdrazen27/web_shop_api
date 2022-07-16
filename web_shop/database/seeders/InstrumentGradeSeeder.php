<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade = 'grade';
        $users_id = 'users_id';
        $instruments_id = 'instruments_id';

        DB::table('instrument_grades')->insert([
            [
                $grade => 5,
                $instruments_id => 1,
                $users_id => 3,
            ],
            [
                $grade => 5,
                $instruments_id => 1,
                $users_id => 4,
            ],
            [
                $grade => 5,
                $instruments_id => 1,
                $users_id => 5,
            ],
            [
                $grade => 1,
                $instruments_id => 2,
                $users_id => 4,
            ],
            [
                $grade => 4,
                $instruments_id => 2,
                $users_id => 5,
            ],
        ]);
    }
}
