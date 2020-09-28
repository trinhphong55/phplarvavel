<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangCauHoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('noidung');
            $table->integer('linh_vuc_id');
            $table->string('phuongan_a');
            $table->string('phuongan_b');
            $table->string('phuongan_c');
            $table->string('phuongan_d');
            $table->string('dapan');
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
        Schema::dropIfExists('cau_hoi');
    }
}
