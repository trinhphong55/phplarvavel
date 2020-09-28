<?php

use Illuminate\Database\Seeder;

class thembangcauhinhapp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('cau_hinh_app')->insert([
        	[
        		
        		'cauhoisai'=>'1',
        		'thoigiantraloi'=>'110',
        		
        	],
        	[
        		
        		'cauhoisai'=>'2',
        		'thoigiantraloi'=>'110',
        		
        	],
        	[
        		
        		'cauhoisai'=>'3',
        		'thoigiantraloi'=>'110',
        		
        	],
        ]);
    }
}
