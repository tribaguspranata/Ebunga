<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblVariantProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_variant_product', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_variant', 50);
            $table -> char('kd_product', 30);
            $table -> char('nama_variant', 100);
            $table -> text('deks_variant');
            $table -> integer('harga');
            $table -> integer('stock');
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
        Schema::dropIfExists('tbl_variant_product');
    }
}
