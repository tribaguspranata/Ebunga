<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBankAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bank_account', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_bank_account', 50);
            $table -> char('tipe_user', 100);
            $table -> char('id_user', 100);
            $table -> char('kd_bank', 10);
            $table -> char('account_name', 100);
            $table -> char('account_number', 100);
            $table -> char('main', 1);
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
        Schema::dropIfExists('tbl_bank_account');
    }
}
