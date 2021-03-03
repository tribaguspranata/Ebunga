<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKomplain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_komplain', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_komplain', 100);
            $table -> char('kd_transaction', 100);
            $table -> char('customer_id', 100);
            $table -> char('seller_id', 100);
            $table -> timestamp('waktu_komplain',0);
            $table -> char('judul', 100);
            $table -> text('isi');
            $table -> char('status', 100);
            $table -> char('operator_handle', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_komplain');
    }
}
