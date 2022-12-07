<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmacies')->insert([
            'id_khn'        => '21',
            'icz'           => '60793490',
            'name'          => 'KHN Veřejná část',
            'street'        => 'Zakladatelská 22',
            'town'          => 'Karviná',
            'psc'           => '735 06',
            'phoenix_code'  => '1700608',
            'pharmos_code'  => '703060',
            'alliance_code' => '78608',
            'via_code'      => null,
            'phone'         => null,
            'email'         => null,
            'person'        => null,
        ]);

        DB::table('pharmacies')->insert([
            'id_khn'        => '22',
            'icz'           => '60793490',
            'name'          => 'KHN v Ráji',
            'street'        => 'Kosmonautů 842',
            'town'          => 'Karviná',
            'psc'           => '734 01',
            'phoenix_code'  => '1702724',
            'pharmos_code'  => '703105',
            'alliance_code' => '79298',
            'via_code'      => null,
            'phone'         => null,
            'email'         => null,
            'person'        => null,
        ]);
    }
}
