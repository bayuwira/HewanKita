<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jumlah');
            $table->bigInteger('harga');
            $table->tinyInteger('diskon');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('produk_jual_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('produk_jual_id')->references('id')->on('produk_juals');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
