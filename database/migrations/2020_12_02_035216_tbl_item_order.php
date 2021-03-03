<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblItemOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item_order', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_order', 10);
            $table -> char('kd_token_item', 20);
            $table -> char('kd_produk', 100);
            $table -> char('nama_penerima', 100);
            $table -> char('email_penerima', 100);
            $table -> char('hp_penerima', 40);
            $table -> date('tanggal_kirim',0);
            $table -> text('alamat_kirim');
            $table -> char('kel_kirim', 10);
            $table -> char('kec_kirim', 10);
            $table -> char('kab_kirim', 10);
            $table -> char('prov_kirim', 10);
            $table -> text('message');
            $table -> char('send_card_email', 1);
            $table -> timestamp('waktu_kirim', 0);
            $table -> integer('sub_total');
            $table -> integer('disc');
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
        Schema::dropIfExists('tbl_item_order');
    }
}
