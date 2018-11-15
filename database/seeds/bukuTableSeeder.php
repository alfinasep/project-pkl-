<?php

use Illuminate\Database\Seeder;

class bukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = [
    		['nama'=>'Alfina septrianti', 'kelas'=>'XI rpl 2', 'asal_sekolah'=>'smpn2dayeukolot'],
    		['nama'=>'Syifa geleh', 'kelas'=>'XI rpl 2', 'asal_sekolah'=>'smpn2dayeukolot'],
    		['nama'=>'neng sekar', 'kelas'=>'Xi rpl2', 'asal_sekolah'=> 'smpn2dayeuhkolot']
    	];
        //masuk database
        DB::table('buku')->insert($anggota);
    }
}
