<?php

use Illuminate\Database\Seeder;

class bioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $riwayat = [
    		['nama'=>'Alfina septrianti', 'tempat'=>'Bandung', 'tanggal_lahir'=>'2002-09-17', 'hoby'=>'Modelling', 'foto'=>'default.png', 'file'=>'default.docx'],
    		['nama'=>'Shintawati', 'tempat'=>'Bandung', 'tanggal_lahir'=>'2001-09-23', 'hoby'=>'Kukucublukan','foto'=>'default.png', 'file'=>'default.docx']
    	];
        //masuk database
        DB::table('bio')->insert($riwayat);
    }
}
