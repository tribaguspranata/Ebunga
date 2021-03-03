<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPaymentAccountEbunga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payment_account_ebunga', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_payment', 20);
            $table -> char('payment_name', 100);
            $table -> char('tipe', 20);
            $table -> char('universal_code', 40);
            $table -> char('account_number', 100);
            $table -> char('main_account', 1);
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
        Schema::dropIfExists('tbl_payment_account_ebunga');
    }
}
