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
        $dimensions = 'dimensions';
        $weight = 'weight';
        $color = 'color';

        DB::table('instruments')->insert([
            [
                $name => 'DW DESIGN MINI PRO BS drum kit',
                $photo => '/assets/DW-DESIGN-MINI-PRO-BS-drum-kit.jpg',
                $price => 250,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 3,
                $instrument_category_id => 1,
                $dimensions => '30x60x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => 'Gretsch GE4-E605-4 Drum Kit',
                $photo => '/assets/Gretsch-GE4-E605-4-Drum-Kit.jpg',
                $price => '300',
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 10,
                $instrument_category_id => 1,
                $dimensions => '30x60x90',
                $weight => 22,
                $color => 'blue'
            ],
            [
                $name => 'PDP CE 20 BS drum kit',
                $photo => '/assets/PDP-CE-20-BS-drum-kit.jpg',
                $price => 9999,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 1,
                $instrument_category_id => 1,
                $dimensions => '30x60x90',
                $weight => 200,
                $color => 'blue'
            ],
            [
                $name => 'Pearl Export drum',
                $photo => '/assets/Pearl-Export-drum.jpg',
                $price => 999,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 1,
                $instrument_category_id => 1,
                $dimensions => '30x60x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => 'Flight EIB-10 BLK electric guitar',
                $photo => '/assets/Flight-EIB-10-BLK-electric-guitar.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 2,
                $dimensions => '38x65x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => 'Gewa Germania electric violin',
                $photo => '/assets/Gewa-Germania-electric-violin.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 2,
                $dimensions => '30x60x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => 'Korg LP 380-BK electric piano',
                $photo => '/assets/Korg-LP-380-BK-electric-piano.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 2,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'blue'
            ],


            [
                $name => 'Blackstar FLY BASS amplifier for bass guitar',
                $photo => '/assets/Blackstar FLY BASS amplifier for bass guitar.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x943',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => 'Boston JP - jack plate',
                $photo => '/assets/Boston JP - jack plate.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '301x600x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => "D'Addario strings for classical guitar",
                $photo => '/assets/DAddario strings for classical guitar.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => "Gewa Pure 407003 gudalo za violinu 12",
                $photo => '/assets/Gewa Pure 407003 gudalo za violinu 12.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => "Partsland A250k potencimeter",
                $photo => '/assets/Partsland A250k potencimeter.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'blue'
            ],
            [
                $name => "Peavey Vypyr guitar amp",
                $photo => '/assets/Peavey Vypyr guitar amp.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],
            [
                $name => "RotoSound RS1000 Violin Strings 44",
                $photo => '/assets/RotoSound RS1000 Violin Strings 44.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 3,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],


            [
                $name => "VGS Gewa",
                $photo => '/assets/VGS Gewa.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 4,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],
            [
                $name => "Sadowsky MetroExpress Bass guitar",
                $photo => '/assets/Sadowsky MetroExpress Bass guitar.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 4,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],
            [
                $name => "Ortega R158SN",
                $photo => '/assets/Ortega R158SN.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 4,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],
            [
                $name => "LAG-TKU8C Concert guitar",
                $photo => '/assets/LAG-TKU8C Concert guitar.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 4,
                $dimensions => '30x600x90',
                $weight => 20,
                $color => 'black'
            ],


            [
                $name => "Kawai E-200-BKM piano",
                $photo => '/assets/Kawai E-200-BKM piano.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 5,
                $dimensions => '300x600x920',
                $weight => 2000,
                $color => 'black'
            ],
            [
                $name => "Kawai K-15E  piano",
                $photo => '/assets/Kawai K-15E  piano.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 5,
                $dimensions => '306x650x920',
                $weight => 2550,
                $color => 'red'
            ],
            [
                $name => "Ritmuller EU 131 - Concert Pianino",
                $photo => '/assets/Ritmuller EU 131 - Concert Pianino.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 5,
                $dimensions => '303x600x930',
                $weight => 2033,
                $color => 'red'
            ],
            [
                $name => "Ritmuller GP 148R Grand Piano",
                $photo => '/assets/Ritmuller GP 148R Grand Piano.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 5,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'red'
            ],


            [
                $name => "Gewa Allegro 44 violine",
                $photo => '/assets/Gewa Allegro 44 violine.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 6,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'gray'
            ],
            [
                $name => "Gewa Outfit Allegro viola 33 cm",
                $photo => '/assets/Gewa Outfit Allegro viola 33 cm.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 6,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'gray'
            ],
            [
                $name => "Gewa Pure Outfit HW Cello 44",
                $photo => '/assets/Gewa Pure Outfit HW Cello 44.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 6,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'gray'
            ],
            [
                $name => "Leonardo LV-1512 violin",
                $photo => '/assets/Leonardo LV-1512 violin.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 6,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'gray'
            ],
            [
                $name => "Leonardo LV-2044 Violine",
                $photo => '/assets/Leonardo LV-2044 Violine.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 6,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'black'
            ],


            [
                $name => "Paxman Model 23 French Horn",
                $photo => '/assets/Paxman Model 23 French Horn.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 7,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'black'
            ],
            [
                $name => "Selmer Super Action 80 Saxophone",
                $photo => '/assets/Selmer Super Action 80 Saxophone.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 7,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'black'
            ],
            [
                $name => "Trevor James 5X 3005EW",
                $photo => '/assets/Trevor James 5X 3005EW.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 7,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'black'
            ],
            [
                $name => "Vincent Bach 181L kornet",
                $photo => '/assets/Vincent Bach 181L kornet.jpg',
                $price => 50,
                $description => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, asperiores dicta dolorum ea error eveniet ex excepturi illo iure magnam modi, nemo placeat provident recusandae rem repellat unde vel!',
                $quantity => 5,
                $instrument_category_id => 7,
                $dimensions => '305x600x905',
                $weight => 2090,
                $color => 'black'
            ],
        ]);

    }
}

