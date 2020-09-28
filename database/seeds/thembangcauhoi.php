<?php

use Illuminate\Database\Seeder;

class thembangcauhoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
        	[
        		'noidung'=>'Câu 1: Giải Grand Slam đầu tiên trong năm là giải nào?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. Austrlia mở rộng',
        		'phuongan_b'=>'B. Wimbledon',
        		'phuongan_c'=>'C. Roland Garos',
        		'phuongan_d'=>'D. Mỹ mở rộng',
        		'dapan'=>'A. Austrlia mở rộng',
        	],
[
        		'noidung'=>'Câu 2: Cùng với Hà Nội T&T (vô địch V-League 2010), CLB nào của Việt Nam tham dự AFC Cup 2011?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. Sông Lam Nghệ An',
        		'phuongan_b'=>'B. SHB Đà Nẵng',
        		'phuongan_c'=>'C. Hoàng Anh Gia Lai',
        		'phuongan_d'=>'D. Becamex Bình Dương',
        		'dapan'=>'A. Sông Lam Nghệ An',
        	],
        	[
        		'noidung'=>'Câu 3: AFC Asian Cup 2011 được tổ chức tại quốc gia nào?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. Qatar',
        		'phuongan_b'=>'B. Hàn Quốc',
        		'phuongan_c'=>'C. Nhật Bản',
        		'phuongan_d'=>'D. Iraq',
        		'dapan'=>'A. Qatar',
        	],
        	[
        		'noidung'=>'Câu 4: Đội nào lên ngôi vô địch AFC Asian Cup 2011 tổ chức tại Qatar?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. Nhật Bản',
        		'phuongan_b'=>'B. Australia',
        		'phuongan_c'=>'C. Hàn Quốc',
        		'phuongan_d'=>'A. Nhật Bản',
        		'dapan'=>'A. Nhật Bản',
        	],
        	[
        		'noidung'=>'Câu 5: Việt Nam lần đầu tiên vô địch AFF Cup là vào năm nào?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. 2004',
        		'phuongan_b'=>'B. 2006',
        		'phuongan_c'=>'C. 2008',
        		'phuongan_d'=>'D. 2010',
        		'dapan'=>'D. 2008',
        	],
        	[
        		'noidung'=>'Câu 6: CLB nào vô địch FIFA Club World Cup 2010 tổ chức tại Qatar?',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'A. Inter Milan',
        		'phuongan_b'=>'B. Real Madrid',
        		'phuongan_c'=>'C. Bayern Munich',
        		'phuongan_d'=>'D. Manchester United',
        		'dapan'=>'D. Manchester United',
        	],
        	[
        		'noidung'=>'',
        		'linh_vuc_id'=>'1',
        		'phuongan_a'=>'',
        		'phuongan_b'=>'',
        		'phuongan_c'=>'',
        		'phuongan_d'=>'',
        		'dapan'=>'',
        	],

        	// [
        	// 	'noidung'=>'',
        	// 	'linh_vuc_id'=>'',
        	// 	'phuongan_a'=>'',
        	// 	'phuongan_b'=>'',
        	// 	'phuongan_c'=>'',
        	// 	'phuongan_d'=>'',
        	// 	'dapan'=>'',
        	// ],


        ]);
    }
}
