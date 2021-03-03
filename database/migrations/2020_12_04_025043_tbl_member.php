<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_member', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 100);
            $table -> char('full_name', 100);
            $table -> char('email', 100);
            $table -> char('phone', 30);
            $table -> char('country', 2);
            $table -> char('provinsi', 10);
            $table -> char('kabupaten', 10);
            $table -> char('kecamatan', 10);
            $table -> char('kelurahan', 10);
            $table -> char('postal_code', 10);
            $table -> text('alamat');
            $table -> char('ktp', 100);
            $table -> char('npwp', 100);
            $table -> char('siup', 100);
            $table -> char('status', 100);
            $table -> char('upline', 200);
            $table -> char('complete_profile', 1);
            $table -> char('suspend', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_member');
    }
}
