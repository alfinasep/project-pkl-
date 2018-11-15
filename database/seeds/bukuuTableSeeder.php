<?php

use Illuminate\Database\Seeder;

class bukuuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $daftar = [
    		['judul_buku'=>'Sang Matahari', 'pengarang'=>'Alfina', 'penerbit'=>'Septrianti', 'tahun_penerbit'=>'2010'],
    		['judul_buku'=>'Sang Kekasih', 'pengarang'=>'syifa', 'penerbit'=>'shinta', 'tahun_penerbit'=>'2010'],
    		['judul_buku'=>'Kamu Milik Ku ', 'pengarang'=>'zahra', 'penerbit'=>'Sahira', 'tahun_penerbit'=>'2010']
    	];
        //masuk database
        DB::table('perpustakaan')->insert($daftar);
    }
}
