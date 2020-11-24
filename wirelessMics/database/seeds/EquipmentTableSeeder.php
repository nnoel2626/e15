<?php

use Illuminate\Database\Seeder;

    class EquipmentTableSeeder extends Seeder
    {

            public function cleanDatabase()
            {
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                foreach ($this->tables as $table) {
                    DB::table($table)->truncate();
                }
                DB::statement('SET FOREIGN_KEY_CHECKS=1');
            }
        }

    class CategoriesTableSeeder extends Seeder
    {
            public function run()
            {
                DB::table('categories')->delete();

                DB::table('categories')->insert([
                    ['category_name' => 'Computers'],
                    ['category_name' => 'Cameras'],
                    ['category_name' => 'Phones'],
                    ['category_name' => 'Tablets'],
                ]);
            }
        }


    class EquipmentTableSeeder extends Seeder
    {
        public function run()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::statement('TRUNCATE equipment');

            DB::table('equipment')->insert([
                [
                    'category_id' => '1',
                    'equipment_name'  => 'Audio Recorder',
                    'brand' => 'Marantz',
                    'model'=> 'L-185',
                    'serial_number'=> '12345',
                    'price' => '22.99',
                    'quantity' => '20',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'image' => 'img/equipment/marantz_1.jpg',
                    'slug' => 'audio-recorder'

                ],
                [
                    'category_id' => '3',
                    'equipment_name'  => 'Dongle',
                    'brand' =>  'Apple',
                    'model'=> 'L-185',
                    'serial_number'=> '12345',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'price' => '21.99',
                    'quantity' => '32',
                    'image' => 'img/equipment/mac_dungle.jpg',
                    'slug' => 'dongle'

                ],
                [
                    'category_id' => '4',
                    'equipment_name' => 'PC Laptop',
                     'brand' => 'Dell',
                    'model'=> 'Latitude',
                    'serial_number'=> '12345',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'price' => '25.99',
                    'quantity' => '12',
                    'image' =>'img/equipment/dell_laptop.jpg',
                    'slug' => 'pc-laptop'

                ],
                [
                    'category_id' => '4',
                    'equipment_name'  => 'Mac Laptop',
                    'brand' => 'Apple',
                    'model'=> 'Mac-Pro',
                    'serial_number'=> '12345',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'price' => '22.93',
                     'quantity' => '43',

                    'image' => 'img/equipment/mac-pro.jpg',
                    'slug' => 'mac-laptop'

                ],
                [
                    'category_id' => '5',
                    'equipment_name'  => 'Microphone',
                     'brand' => 'Shure',
                    'model'=> 'sm-58',
                    'serial_number'=> '12345',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'price' => '27.95',
                    'quantity' => '13',

                    'image' => 'img/equipment/shure_mic.jpg',
                    'slug' => 'microphone'

                ],
                [
                    'category_id' => '6',
                    'equipment_name'  => 'Projector',
                     'brand' => 'Sanyo',
                    'model'=> 'PL-WTC500',
                    'serial_number'=> '12345',
                    'description' => 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'price' => '29.99',
                    'quantity' => '53',

                    'image' => 'img/equipment/sanyo_projector.jpg',
                    'slug' => 'projector'

                ],
                [
                    'category_id' => '7',
                    'equipment_name'  => 'Tripod',
                    'brand' => 'Manfrotto',
                    'model'=> 'T-25',
                    'serial_number'=> '12345',
                    'price' => '23.92',
                    'quantity' => '41',
                    'image' => 'img/equipment/tripod.jpg',
                    'description' => 'This is a short description. Lorem ipsum dolor sit   amet, consectetur adipiscing elit.',
                    'slug' => 'tripod'
                ],

                [
                    'category_id' => '8',
                    'equipment_name'  => 'Video Camera',
                    'brand' => 'Panasonic',
                    'model'=> 'ts4000',
                    'serial_number'=> '12345',
                    'price' => '23.92',
                    'quantity' => '41',
                    'image' => 'img/equipment/hdzoom_cam.jpg',
                    'description' => 'This is a short description. Lorem ipsum dolor sit   amet, consectetur adipiscing elit.',
                    'slug' => 'video-camera'
                ],

                 [
                    'category_id' => '9',
                    'equipment_name'  => 'Sound System',
                    'brand' => 'Yamaha',
                    'model'=> 't-25',
                    'serial_number'=> '12345',
                    'price' => '23.92',
                    'quantity' => '41',
                    'image' => 'img/equipment/sound_system.jpg',
                    'description' => 'This is a short description. Lorem ipsum dolor sit   amet, consectetur    adipiscing elit.',
                    'slug' => 'sound_system'
                ],

            ]);
        }



}
