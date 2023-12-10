<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use Illuminate\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['nik' => '11261', 'nama' => 'DANDI'],
            ['nik' => '41015', 'nama' => 'YUSUF'],
            ['nik' => '41016', 'nama' => 'FEBRI ASNADI' ],
            ['nik' => '113362', 'nama' => 'RAHMANI' ],
            ['nik' => '33007', 'nama' => 'NASIRUDIN' ],
            ['nik' => '33008', 'nama' => 'SUDARSO' ],
            ['nik' => '33009', 'nama' => 'KHAERUDIN'],
            ['nik' => '33010', 'nama' => 'BAHAUDIN' ],
            ['nik' => '33011', 'nama' => 'DODO SABDA' ],
            ['nik' => '33012', 'nama' => 'SAMSUL HIDAYAT' ],
            ['nik' => '33013', 'nama' => 'HAERUDIN BAHRI' ],
            ['nik' => '33014', 'nama' => 'SANTOSO'],
            ['nik' => '33015', 'nama' => 'SAMSURI' ],
            ['nik' => '33016', 'nama' => 'TAJULALAB' ],
            ['nik' => '33017', 'nama' => 'HUDRI' ],
            ['nik' => '33018', 'nama' => 'DARUSMAN' ],
            ['nik' => '33019', 'nama' => 'ATOR' ],
            ['nik' => '113706', 'nama' => 'AANG NUH' ],
            ['nik' => '33021', 'nama' =>'HERU' ],
            ['nik' => '33022', 'nama' =>'AAN ANUGRAH' ],
        ];


        foreach ($data as $key => $item) {
            Alternatif::create([
                'nik' => $item['nik'],
                'nama' => $item['nama'],

            ]);
        }
    }
}
