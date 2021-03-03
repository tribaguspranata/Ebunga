<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblRegistrasiUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_registrasi_user', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_registrasi', 100);
            $table -> char('token_registrasi', 100);
            $table -> char('full_name', 200);
            $table -> char('phone_number', 50);
            $table -> char('email', 100);
            $table -> char('password', 200);
            $table -> timestamp('waktu_registrasi', 0);
            $table -> char('referral_code', 30) -> nullable(); 
            $table -> char('status_aktivasi', 10);
            $table -> datetime('waktu_aktivasi', 0) -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_registrasi_user');
    }
}
