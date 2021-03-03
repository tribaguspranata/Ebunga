<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblOrderProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_order', 50);
            $table -> char('customer', 100);
            $table -> timestamp('waktu', 0);
            $table -> char('kd_product', 40);
            $table -> char('id_seller', 100);
            $table -> char('qt', 100);
            $table -> integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order_produk');
    }
}
