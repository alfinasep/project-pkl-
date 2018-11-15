<?php

use Illuminate\Database\Seeder;

class pendaftaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $siswa = [
    		['nama'=>'Alfina septrianti', 'jurusan'=>'RPL', 'asal_sekolah'=>'smpn2dayeukolot', 'alamat'=>'Batuwangi','tanggal_lahir'=>'2002-09-17'],
    		['nama'=>'Syifa shintawati', 'jurusan'=>'RPL', 'asal_sekolah'=>'smpn2dayeukolot', 'alamat'=>'permata kopo','tanggal_lahir'=>'2001-09-23'],
    		['nama'=>'Neng sekar', 'jurusan'=>'RPL', 'asal_sekolah'=> 'smpn2katapang', 'alamat'=>'leweng kaleng','tanggal_lahir'=>'2002-09-19']
    	];
        //masuk database
        DB::table('pendaftaran')->insert($siswa);
    }
}
