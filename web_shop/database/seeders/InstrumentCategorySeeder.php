<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'name';
        $create_user_id = 'create_user_id';
        $photo = 'photo';
        DB::table('instrument_categories')->insert([
            [
                $name => 'gitare',
                $create_user_id => 1,
                $photo => '',
            ],
            [
                $name => 'klaviri',
                $create_user_id => 1,
                $photo => '',
            ],
            [
                $name => 'bubnjevi',
                $create_user_id => 1,
                $photo => '',
            ],
            [
                $name => 'harmonike',
                $create_user_id => 1,
                $photo => '',
            ],
            [
                $name => 'trube',
                $create_user_id => 1,
                $photo => '',
            ],
            [
                $name => 'tambure',
                $create_user_id => 1,
                $photo => '',
            ],
            ]);
    }
}
