<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$post = [
    		['title'=>'Tips Cepat langsing', 'content'=>'lorem ipsum'],
    		['title'=>'Haruskah Menunda-nunda?', 'content'=>'lorem ipsum'],

    		['title'=>'Tujuan langsing', 'content'=>'lorem ipsum']
    	];
        //masuk database
        DB::table('posts')->insert($post);
    }
}
