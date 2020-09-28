<?php

use Illuminate\Database\Seeder;

class thembangcauhinhcauhoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cau_hinh_diem_cau_hoi')->insert([
        	[
        		
        		'thutu'=>'1',
        		'diem'=>'1100',
        		
        	],
        	[
        		
        		'thutu'=>'2',
        		'diem'=>'1200',
        		
        	],
        	[
        		
        		'thutu'=>'3',
        		'diem'=>'5100',
        		
        	],
        ]);
    }
}
