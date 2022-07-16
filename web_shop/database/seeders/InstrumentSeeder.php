<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'name';
        $photo = 'photo';
        $price = 'price';
        $description = 'description';
        $quantity = 'quantity';
        $instrument_category_id = 'instrument_category_id';
        DB::table('instruments')->insert([
            [
                $name => 'gitara 1',
                $photo => '',
                $price => 250,
                $description => 'gitara 6 zica...',
                $quantity => 3,
                $instrument_category_id => 1,
            ],
            [
                $name => 'gitara 2',
                $photo => '',
                $price => '300',
                $description => 'Gitara 7 zica',
                $quantity => 10,
                $instrument_category_id => 1,
            ],
            [
                $name => 'Yamaha 2022',
                $photo => '',
                $price => 9999,
                $description => 'Yamaha najnovije generacije',
                $quantity => 1,
                $instrument_category_id => 2,
            ],
            [
                $name => 'LOUD 1984',
                $photo => '',
                $price => 999,
                $description => 'bubanj loud 1984',
                $quantity => 1,
                $instrument_category_id => 2,
            ],
        ]);

    }
}
