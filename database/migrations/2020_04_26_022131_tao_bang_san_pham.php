<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('SanPham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('LSP_id');
            $table->string('tenSP',100);
            $table->decimal('donGia',9,2);
            $table->integer('soLuong');
            $table->timestamps();

            $table->foreign('LSP_id')->references('id')->on('LoaiSanPham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
