<?php

use Illuminate\Database\Seeder;

class thembangluotchoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('luot_Choi')->insert([
        	[
        		'nguoichoiid'=>'1',
        		'socau'=>'4',
        		'diem'=>'1500',
        		
        	],
        	[
        		'nguoichoiid'=>'2',
        		'socau'=>'5',
        		'diem'=>'500',
        		
        	],
        ]);
    }
}
