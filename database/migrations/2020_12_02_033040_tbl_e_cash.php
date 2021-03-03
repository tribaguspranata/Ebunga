<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblECash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ecash', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_transaction', 40);
            $table -> char('user', 100);
            $table -> integer('old_ecash');
            $table -> char('flow', 30);
            $table -> integer('total');
            $table -> integer('new_balance');
            $table -> dateTime('waktu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ecash');
    }
}
