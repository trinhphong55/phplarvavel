<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\hash;

class thembangnguoichoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           App\nguoichoi::create([
        	'tendangnhap'=>'admin',
        	'matkhau'=>hash::make('1234'),
        	'email'=> 'trinhducphong',
        	'hinhdaidien'=> 'trinhducphong',
        	'diemcaonhat'=> '100',

       

        ]);
    }
}
