<?php

use Illuminate\Database\Seeder;

class thembanglichsumuacredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lichsumuacredit')->insert([
        	[
        		'nguoichoiid'=>'1',
        		'goicreditid'=>'4',
        		'credit'=>'1500',
        		'sotien'=>'500',
        	],
        	[
        		'nguoichoiid'=>'2',
        		'goicreditid'=>'3',
        		'credit'=>'600',
        		'sotien'=>'500',
        	],
        	[
        		'nguoichoiid'=>'3',
        		'goicreditid'=>'2',
        		'credit'=>'250',
        		'sotien'=>'500',
        	],
        	[
        		'nguoichoiid'=>'4',
        		'goicreditid'=>'1',
        		'credit'=>'100',
        		'sotien'=>'500',
        	],
        ]);
    }
}
