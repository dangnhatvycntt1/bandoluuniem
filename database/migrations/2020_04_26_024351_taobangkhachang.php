<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Taobangkhachang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenKH',100);
            $table->string('email')->unique();
            $table->char('sDT');

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
