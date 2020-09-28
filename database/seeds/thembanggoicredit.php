<?php

use Illuminate\Database\Seeder;

class thembanggoicredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goicredit')->insert([
        	[
        		'tengoi'=>'Bạc',
        		'credit'=>'100',
        		'sotien'=>'50',
        	],
        	[
        		'tengoi'=>'Vàng',
        		'credit'=>'250',
        		'sotien'=>'100',
        	],
        	[
        		'tengoi'=>'bạch Kim',
        		'credit'=>'600',
        		'sotien'=>'200',
        	],
        	[
        		'tengoi'=>'Kim Cương',
        		'credit'=>'1500',
        		'sotien'=>'500',
        	],
        ]);
    }
}
