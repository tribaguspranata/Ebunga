<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPromo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promo', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_promo', 10);
            $table -> char('nama_promo', 100);
            $table -> text('deks_promo');
            $table -> char('cakupan', 100);
            $table -> char('id_seller', 100);
            $table -> char('tipe', 100);
            $table -> integer('value');
            $table -> date('start_active');
            $table -> date('end_active');
            $table -> char('status', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_promo');
    }
}
