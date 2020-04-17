<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

             #seed microphone table
          DB::table('locations')->insert([

                [
                    "building"  => "1 Bow St. (One Bow Street)",
                    "room"  => "317",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1 Bow St. (One Bow Street) ",
                    "room"  => "330",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1 Brattle Square (One Brattle Square) ",
                    "room"  => "616",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1280 Massachusetts Ave. ",
                    "room"  => "322 (EdLabs)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1280 Massachusetts Ave.",
                    "room"  => "351",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1280 Massachusetts Ave. ",
                    "room"  => "360 Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "1414 Massachusetts Ave. ",
                    "room"  => "561",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Arrow St.",
                    "room"  => "306",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Arrow St. ",
                    "room"  => "318",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Arrow St. ",
                    "room"  => "408",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Arrow St. ",
                    "room"  => "420",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Divinity Ave. (Yenching Library) ",
                    "room"  => "118 - Yenching Auditorium",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Divinity Ave. (Yenching Library) ",
                    "room"  => " 136 - Common Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Divinity Ave. (Yenching Library) ",
                    "room"  => "212",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Divinity Ave. (Yenching Library) ",
                    "room"  => "213",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "2 Divinity Ave. (Yenching Library) ",
                    "room"  => "214",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "5 Linden St. ",
                    "room"  => "Seminar Room 7",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "60 Oxford St.",
                    "room"  => "311",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "60 Oxford St. ",
                    "room"  => "330",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "61 Kirkland St. ",
                    "room"  => "202",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Agassiz House ",
                    "room"  => "Lyman Common Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Agassiz House ",
                    "room"  => "Theater",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "12",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "18",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "024 - McFadden Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "107",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "110 - Thompson Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "114 - Kresge Foundation Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "114 - Kresge Foundation Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "118 - Lyman Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "128 - Kates Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "133 - Plimpton Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "211",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center",
                    "room"  => " 218 - W.S. Fong Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center",
                    "room"  => " 269 - Larsen Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "316",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "359 - Nebel Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "373 - Slavic Seminar Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Barker Center ",
                    "room"  => "403 - Finnegan Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Bauer Life Sciences (Bauer Lab) ",
                    "room"  => "001 - Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "1033",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "1058",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "1065",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "1080 - Lecture Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "2062/2064",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "2065",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab  ",
                    "room"  => "3009",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab",
                    "room"  => "3059",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab  ",
                    "room"  => "3081",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab  ",
                    "room"  => "3109  => Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "4000",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab ",
                    "room"  => "4070",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab  ",
                    "room"  => "4102",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Biological Lab  ",
                    "room"  => "4106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall ",
                    "room"  => "103",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall ",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall  ",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall  ",
                    "room"  => "110-Fong Auditorium",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "203",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "303",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "335",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "403",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "G02",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Boylston Hall",
                    "room"  => "G35",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Carpenter Center",
                    "room"  => "401",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Carpenter Center",
                    "room"  => "402",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Carpenter Center",
                    "room"  => "B-03 - Cinema",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Carpenter Center",
                    "room"  => "B-04",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Center for European Studies",
                    "room"  => " LL1 - Lower Level Conference Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North)",
                    "room"  => "K018",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North)",
                    "room"  => "K050 - Marcil-Monahan Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North)",
                    "room"  => "K107",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North)  ",
                    "room"  => "K108",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North)  ",
                    "room"  => "K109 - Krulewski Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North) ",
                    "room"  => "K262",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North) ",
                    "room"  => "K354",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North) ",
                    "room"  => "K401 - Andrea L. Olshan Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS Knafel (North) ",
                    "room"  => "K450",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South ",
                    "room"  => "S001 - Kin-Chung Lam Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S003 - Bankee Kwan Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South ",
                    "room"  => "S010 - Tsai Auditorium",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S020 - Belfer Case Study Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S030 ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S040 - Uziel Family Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S050 - Thomas Chan-Soo Kang Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S053 - MTS CGIS Office",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S053 - MTS CGIS Office  => Portable",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South  ",
                    "room"  => "S153",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South ",
                    "room"  => "S250 - Huguette and Michel Port� Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South ",
                    "room"  => "S354",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "CGIS South ",
                    "room"  => "S450",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Cruft Lab ",
                    "room"  => "309  => Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Dana-Palmer House ",
                    "room"  => "102 - Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "101",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall  ",
                    "room"  => "108",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "210",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "305",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "307",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "310 - Tanner Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Emerson Hall ",
                    "room"  => "318",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "161",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "261",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "268",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "361",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "G61",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Fairchild Biochemistry Lab ",
                    "room"  => "G62",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Farkas Hall ",
                    "room"  => "203",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Farkas Hall ",
                    "room"  => "303 Studio",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "100 - Geological Lecture Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "102 - Haller Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "103A",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => " 103B",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "103C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "103C  => Brick wall side",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "204 - McKinstry Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "375",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "413 - Shaler Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Geological Museum - University Museum",
                    "room"  => "418 - Fourth Fl. Conference Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Gordon McKay Lab",
                    "room"  => "106A",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Gordon McKay Lab",
                    "room"  => "402A",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "0505 - Menschel Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => " 0600 - Seminar Rm",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "0630 - Deknatel Lecture Hall  => Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "0700 - Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "4400 - Art Study Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "4550 - Art Study Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "4700 - Art Study Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Art Museums",
                    "room"  => "5000  => Light box left",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "101",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "102",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "103",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "201",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Hall",
                    "room"  => "202",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Harvard Museum of Natural History",
                    "room"  => "43A - Moorcroft Lab",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hilles",
                    "room"  => "104 Event Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hilles",
                    "room"  => "105 Community Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hilles",
                    "room"  => "Cinema",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hilles",
                    "room"  => "P-02 - Performance Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hilles",
                    "room"  => "P-14 - Small Function Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hoffman Lab",
                    "room"  => "129 - Geophysics/Birch Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Hoffman Lab",
                    "room"  => "Faculty Lounge (4th fl.)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Holden Chapel",
                    "room"  => "Chapel",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "250",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "251",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "256",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "267",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "356",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Jefferson Lab",
                    "room"  => "453",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Knafel Center (Radcliffe Gym)",
                    "room"  => "112",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Knafel Center (Radcliffe Gym)",
                    "room"  => "Main Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lab For Integrated Science and Engineering (LISE)",
                    "room"  => "303",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lab For Integrated Science and Engineering (LISE)",
                    "room"  => "311",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lab For Integrated Science and Engineering (LISE)",
                    "room"  => "319",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lab For Integrated Science and Engineering (LISE)",
                    "room"  => "610",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lamont Library",
                    "room"  => "230",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lamont Library",
                    "room"  => "240",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lamont Library",
                    "room"  => "335 - Forum",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "219",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "301 - 3rd fl. Lounge ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "M-15",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "M-16",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "M-17",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Littauer Center",
                    "room"  => "M-42 M level Lounge",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => "B-11",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => "B-12",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => "B-13",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => "B-14",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => "B-15",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lowell Hall",
                    "room"  => " Lecture Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lyman Lab",
                    "room"  => "330",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lyman Lab",
                    "room"  => "425  => Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Lyman Lab",
                    "room"  => "425  => Side",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "119",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "123",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "221",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "223",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "319",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "323",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "323",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "G115 - Lessin Lecture Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Maxwell Dworkin",
                    "room"  => "G125 - Watjen Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Memorial Hall",
                    "room"  => "28",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Memorial Hall",
                    "room"  => "302",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Memorial Hall",
                    "room"  => "303",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Memorial Hall",
                    "room"  => " Sanders Theatre",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "100 Oceanography Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "101",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "101A Agassiz Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "202/202S",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "429",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => " 440  => ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "529",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "535 A-B",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology (MCZ)",
                    "room"  => "541",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology Addition (MCZ Lab)",
                    "room"  => "213",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Museum Of Comparative Zoology Addition (MCZ Lab)",
                    "room"  => "401",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "Davison Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "G20",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "Paine Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "PH4 (3)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "PH5 (8)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "PH6 (1)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Music Building",
                    "room"  => "PH9 (2)",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "169",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "195.05",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "243",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "255",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "269",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "305",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "330",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "343",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "353",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "415.4",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "425",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "426",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "453",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "Atrium",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-101 ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-103",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-107",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-108",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-109",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-110",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-111 - MTS NWB Office",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-127",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-129",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-133",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-137",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-141",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-145",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-215.30",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-227.55",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-253",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-311",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-315.30",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Northwest Building",
                    "room"  => "B-341",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Palfrey House",
                    "room"  => "110 Conference Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Peabody Museum",
                    "room"  => "12",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Peabody Museum",
                    "room"  => "52H",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Peabody Museum",
                    "room"  => "560",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Peabody Museum",
                    "room"  => "561",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Phillips Brooks House",
                    "room"  => "308 - Bettens Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Phillips Brooks House",
                    "room"  => "Parlor",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall",
                    "room"  => "100F",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall",
                    "room"  => "114",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall",
                    "room"  => "209",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall",
                    "room"  => "213 - Brooks Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall ",
                    "room"  => "219 - Dean's Conf. Rm.",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall",
                    "room"  => "301  => Front",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall ",
                    "room"  => "306",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Pierce Hall ",
                    "room"  => "320",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall ",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => " 106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => "107",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => "125 History Dept. Conf. Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => "222",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => "223",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Robinson Hall",
                    "room"  => "B21 Warren Center Conf. Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "004 - Lecture Hall",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building ",
                    "room"  => "323",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "413",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "422",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "423",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "427",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sackler Building",
                    "room"  => "521",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "102",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "109",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "110",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "111",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "112",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "113",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "116",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "206",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "216",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "221",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "222",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "229",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "232",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "252",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "300H",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "302",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "304",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "309",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "309A",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "310",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "312",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "314",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "316.06",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "359",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "371",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "403C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "403D",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "408C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "408D",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "411",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "412",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "413C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "413D",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "418C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "418D",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "437 - Math Dept. Common Rm. ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "469  => Audience Left",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "507",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "530",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "613",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center",
                    "room"  => "705",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "706",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "804",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science Center ",
                    "room"  => "901",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterB-00 - MTS Prep Room",
                    "room"  => "B-00 - MTS Prep Room ",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterB-01D - E-Shop",
                    "room"  => "B-01D - E-Shop",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterB-02 - MTS Main Office",
                    "room"  => "B-02 - MTS Main Office",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterB-10",
                    "room"  => "B-10",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterHall A",
                    "room"  => "Hall A",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterHall B ",
                    "room"  => "Hall B",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterHall C",
                    "room"  => "Hall C",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterHall D",
                    "room"  => "Hall D",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Science CenterHall E",
                    "room"  => "Hall E",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Semitic Museum ",
                    "room"  => "201",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Semitic Museum ",
                    "room"  => "304",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "101",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "102",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "103",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "104",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "106",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "107",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "109",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "110",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "111",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "112",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "113",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "201",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "202",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "203",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "204",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "205",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall",
                    "room"  => "206",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "207",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "208",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "209",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "210",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "211",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "212",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "213",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "214",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "215",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "301 - MTS Sever Office",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "302",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall",
                    "room"  => "303",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall",
                    "room"  => "304",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "305",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "306",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "307",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "308",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "310",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "402",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "405",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall",
                    "room"  => "411",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "415",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Sever Hall ",
                    "room"  => "416",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Smith Campus Center ",
                    "room"  => "1009",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Smith Campus Center (Holyoke) ",
                    "room"  => "464",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Smith Campus Center (Holyoke) ",
                    "room"  => "480",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Smith Campus Center (Holyoke) ",
                    "room"  => "913",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Tozzer Anthropology Building ",
                    "room"  => "102 - Library Seminar Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Tozzer Anthropology Building ",
                    "room"  => "109 - Library Seminar Room  => Center",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Tozzer Anthropology Building ",
                    "room"  => "203",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Tozzer Anthropology Building ",
                    "room"  => "Atrium",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "University Hall ",
                    "room"  => "025 - Basement Conference Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "University Hall ",
                    "room"  => "Bulfinch Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "University Herbaria ",
                    "room"  => "125",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "University Herbaria ",
                    "room"  => "142",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "115",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "210",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "211",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building",
                    "room"  => "212",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "213",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "214",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "215",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "216",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "217",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Vanserg Building ",
                    "room"  => "218",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Warren House ",
                    "room"  => "102 - Folklore Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "Warren House ",
                    "room"  => "201 - Kates Room",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "105",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "1050",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "1145",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "1305",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "1465",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "1550",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "303",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "305",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "350",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "450",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "501",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "601",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "765",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "B1",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "B4",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ],
                [
                    "building"  => "William James Hall ",
                    "room"  => "B6",
                    "city"  => "cambridge",
                    "state"  => "MA",
                    "postal_code"  => "02138"
                ]



          ]);


        }

}
