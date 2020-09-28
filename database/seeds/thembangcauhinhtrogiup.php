<?php

use Illuminate\Database\Seeder;

class thembangcauhinhtrogiup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cau_hinh_tro_giup')->insert([
        	[
        		
        		'loaitrogiup'  =>'1',
        		'thutu' =>'1100',
        		'credit'  =>'1100', 
        		
        	],
        	[
        		
        		'loaitrogiup' =>'2',
        		'thutu' =>'1200',
        		'credit' =>'5100', 
        		
        	],
            [
        		
        		'loaitrogiup' =>'3',
        		'thutu'=> '300',
        		'credit'=> '1500', 
        		
        	],
         ]);


    }
}
