<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\hash;

class themquantrivien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\quantrivien::create([
        	'tendangnhap'=>'admin',
        	'matkhau'=>hash::make('1234'),
        	'hoten'=> 'trinhducphong'
       

        ]);

    }
}
