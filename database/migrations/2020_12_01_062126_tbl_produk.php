<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_produk', 100);
            $table -> char('nama_produk', 100);
            $table -> char('slug', 200);
            $table -> text('deks_produk');
            $table -> char('kategori', 100);
            $table -> char('sub_kategori', 100);
            $table -> char('id_branch', 50);
            $table -> char('id_seller', 50);
            $table -> integer('harga');
            $table -> integer('harga_up');
            $table -> integer('stock');
            $table -> char('foto_utama', 50);
            $table -> char('approve', 1);
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produk');
    }
}
