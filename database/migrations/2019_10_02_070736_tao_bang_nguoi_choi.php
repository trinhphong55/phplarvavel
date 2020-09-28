<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangNguoiChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoichoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendangnhap');
            $table->string('matkhau');
            $table->string('email');
            $table->string('hinhdaidien');
            $table->integer('diemcaonhat');
            $table->boolean('xoa')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoichoi');
    }
}
