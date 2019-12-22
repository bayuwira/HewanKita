<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_juals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('slug');
            $table->text('deskripsi');
            $table->string('photo_thumbnail');
            $table->string('no_telp', 15);
            $table->string('harga_jual');
            $table->string('harga_beli');
            $table->tinyInteger('diskon');
            $table->integer('stok');
            $table->bigInteger('produk_kategori_id')->unsigned();
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
        Schema::dropIfExists('produk_juals');
    }
}
