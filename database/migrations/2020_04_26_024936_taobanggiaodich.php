<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Taobanggiaodich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('GiaoDich', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('soLuong',4);
            
            $table->decimal('tongTien');

            $table->unsignedBigInteger('sPham_id');
            $table->foreign('sPham_id')->references('id')->on('SanPham');
            $table->unsignedBigInteger('kHang_id');
            $table->foreign('kHang_id')->references('id')->on('KhachHang');          
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('User');

            $table->timestamps();
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
