<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationsToProdukJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk_juals', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('produk_kategori_id')->references('id')->on('produk_kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produk_juals', function (Blueprint $table) {
            // $table->dropIndex(['user_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['produk_kategori_id']);
        });
    }
}
