<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Microphone;
use App\Tag;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Delete All tables
       // DB::table('microphone_tag')->truncate();
       DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Microphone::truncate();
        Tag::truncate();

        #seed microphone table
          DB::table('microphones')->insert([
           [
            'slug' => 'barker_thompson_lav_mic_one',
            'building'=> 'Barker Center',
            'room'=> 'Thompson',
            'make'=> 'Shure',
            'model'=> 'ULX P4',
            'band'=> 'J1',
            'frequency_range'=> '554-590 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'Lapel',
            'group'=> 'G2',
            'channel'=> 'CH20',
            'Assigned_frequency'=> '589.725 MHZ',
            'comments'=> ''
        ],
        [

            'slug' => 'barker_thompson_handheld_mic_one',
            'building'=> 'Barker Center',
            'room'=> 'Thompson',
            'make'=> 'Shure',
            'model'=> 'ULX P4',
            'band'=> 'J1',
            'frequency_range'=> '554-590 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'HandHeld',
            'group'=> 'G2',
            'channel'=> 'CH19',
            'assigned_frequency'=> '589.725 MHZ',
            'comments'=> ''
        ],
        [
           'slug' => 'biolab_lav_mic_one',
           'building'=> 'BioLab',
           'room'=> 'Lecture H 1080',
           'make'=> 'Shure',
           'model'=> 'ULX P4',
           'band'=> 'J1',
           'frequency_range'=> '554.590MHZ',
           'serial_number'=> '',
           'mic_type'=> 'Lapel',
           'group'=> 'G2',
           'channel'=> 'CH16',
           'assigned_frequency'=> '584.375MHZ',
           'comments'=> ''
        ],
        [

            'slug' => 'biolab_handheld_mic_one',
            'building'=> 'BioLab',
            'room'=> 'Lecture H 1080',
            'make'=> 'Shure',
            'model'=> 'ULX P4',
            'band'=> 'J1',
            'frequency_range'=> '554.590MHZ',
            'serial_number'=> '',
            'mic_type'=> 'HandHeld',
            'group'=> 'G2',
            'channel'=> 'CH11',
            'assigned_frequency'=> '578.075MHZ',
            'comments'=> ''
        ],
        [
            'slug' => 'boylston_lav_mic_one',
            'building'=> 'Boylston Hall',
            'room'=> 'Fong Auditorium',
            'make'=> 'Shure',
            'model'=> 'ULX S4',
            'band'=> 'J1',
            'frequency_range'=> '555 - 590 MHZ',
            'serial_number'=> '0928071325-01',
            'mic_type'=> 'Lapel',
            'group'=> 'G2',
            'channel'=> 'Ch20',
            'assigned_frequency'=> '589.725 MHz',
            'comments'=> ''
        ],
        [
            'slug' => 'boylston_handheld_mic_one',
            'building'=> 'Boylston Hall',
            'room'=> 'Fong Auditorium',
            'make'=> 'Shure',
            'model'=> 'QLX-D',
            'band'=> 'G50',
            'frequency_range'=> '470 - 536 MHZ',
            'serial_number'=> '417132395395A2092111',
            'mic_type'=> 'HandHeld',
            'group'=> 'G2',
            'channel'=> 'CH66',
            'assigned_frequency'=> '533.450 MHZ',
            'comments'=> ''
        ],
        [
            'slug' => 'boylston_handheld_mic_two',
            'building'=> 'Boylston Hall',
            'room'=> 'Fong Auditorium',
            'make'=> 'Shure',
            'model'=> 'QLX-D',
            'band'=> 'G50',
            'frequency_range'=> '470 - 536 MHZ',
            'serial_number'=> '417132395495A2092111',
            'mic_type'=> 'HandHeld',
            'group'=> 'G2',
            'channel'=> 'CH67',
            'assigned_frequency'=> '533.820 MHZ',
            'comments'=> ''
        ],
        [

            'slug' => 'boylston_lav_mic_one',
            'building'=> 'Boylston Hall',
            'room'=> 'Boylston 104',
            'make'=> 'Shure',
            'model'=> 'ULX-S',
            'band'=> 'G3',
            'frequency_range'=> '555 - 590 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'Lapel',
            'group'=> 'G5',
            'channel'=> 'CH9',
            'assigned_frequency'=> '',
            'comments'=> ''
        ],
        [

            'slug' => 'capenter_lav_mic_one',
            'building'=> 'Carpenter Center',
            'room'=> 'Theater',
            'make'=> 'Shure',
            'model'=> 'ULX P4',
            'band'=> 'J1',
            'frequency_range'=> '554 - 590 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'Lav #1',
            'group'=> 'G2',
            'channel'=> 'CH17',
            'assigned_frequency'=> '587.500 MHz',
            'comments'=> ''
        ],
        [

            'slug' => 'capenter_lav_mic_two',
            'building'=> 'Carpenter Center',
            'room'=> 'Theater',
            'make'=> 'Shure',
            'model'=> 'ULX P4',
            'band'=> 'J1',
            'frequency_range'=> '554 - 590 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'Lav # 2',
            'group'=> 'G2',
            'channel'=> 'CH18',
            'assigned_frequency'=> '588.375 MHZ',
            'comments'=> '',
        ],
        [
            'slug' =>'mts_office_axient_lav_mic_one',
            'building'=> 'MTS Office',
            'room'=> 'B02',
            'make'=> 'Shure',
            'model'=> 'Axient Digital',
            'band'=> 'G57',
            'frequency_range'=> '470- 616 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'Lapel',
            'group'=> 'G5',
            'channel'=> 'CH243',
            'assigned_frequency'=> '602.350 MHZ',
            'comments'=> ''
        ],
        [
            'slug' =>'mts_office_axient_handheld_mic_one',
            'building'=> 'MTS Office',
            'room'=> 'Thompson',
            'make'=> 'Shure',
            'model'=> 'Axient Digital',
            'band'=> 'G57',
            'frequency_range'=> '470- 616 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'HandHeld',
            'group'=> 'G5',
            'channel'=> 'CH245',
            'assigned_frequency'=> '603.700 MHZ',
            'comments'=> ''
        ],
        [
            'slug' =>'mts_office_axient_lav_handhelp_two',
            'building'=> 'Science Center',
            'room'=> 'Thompson',
            'make'=> 'Shure',
            'model'=> 'Axient Digital',
            'band'=> 'G57',
            'frequency_range'=> '470- 616 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'HandHeld',
            'group'=> 'G5',
            'channel'=> 'CH247',
            'assigned_frequency'=> '604.850 MHz',
            'comments'=> ''
        ],
        [
            'slug' =>'mts_office_axient_handheld_mic_three',
            'building'=> 'Barker Center',
            'room'=> 'Thompson',
            'make'=> 'Shure',
            'model'=> 'Axient Digital',
            'band'=> 'G57',
            'frequency_range'=> '470- 616 MHZ',
            'serial_number'=> '',
            'mic_type'=> 'HandHeld',
            'group'=> 'G5',
            'channel'=> 'CH249',
            'assigned_frequency'=> '605.875 MHz',
            'comments'=> ''
        ],

        ]);

        //$tags = [];

        Tag::create(['tag_name' => 'Installed']);
        Tag::create(['tag_name' => 'Portable']);
        Tag::create(['tag_name' => 'Roaming']);
        Tag::create(['tag_name' => 'Special Event']);



        #Get all the tags attaching up to 2 random tags to each Microphone
        $tags = App\Tag::all();

         #Populate the pivot table
        App\Microphone::all()->each(function ($microphone) use ($tags) {
        $microphone->tags()->attach(
        $tags->random(rand(1, 2))->pluck('id')->toArray());
      });

    }
}

