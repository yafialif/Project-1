<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->Insert([
            "title"=>"Admin"
        ]);
        DB::table('menus')->Insert([
            "position"=>"0",
            "menu_type"=>"1",
            "icon"=>"fa-database",
            "name"=>"Daftarmobil",
            "title"=>"Daftar Mobil"
        ]);

        DB::table('menu_role')->Insert([
            "menu_id"=>"1",
            "role_id"=>"2"
        ]);

        DB::table('daftarmobil')->Insert([
            [
                "no_kerangka"=>"1234567890",
                "no_polisi"=>"B 1234 CDE",
                "merek"=>"Toyota",
                "tipe"=>"Avanza",
                "tahun"=>"2013"

            ],
            [
                "no_kerangka"=>"0987654321",
                "no_polisi"=>"B 5678 FGH",
                "merek"=>"Honda",
                "tipe"=>"Mobilio",
                "tahun"=>"2014"

            ]]
        );

    }
}
