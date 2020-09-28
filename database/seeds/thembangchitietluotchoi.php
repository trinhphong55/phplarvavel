<?php

use Illuminate\Database\Seeder;

class thembangchitietluotchoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_luot_choi')->insert([
        	[
        		'luotchoiid'=>' 1',
        		'cauhoiid'=>'1',
        		'phuongan'=>'A. Austrlia mở rộng',
        		'diem'=>'2000',
            ],
            [
                'luotchoiid'=>' 2',
                'cauhoiid'=>'2',
                'phuongan'=>'A. Austrlia mở rộng',
                'diem'=>'24000',
            ],
        		
        	]);
    }
}
