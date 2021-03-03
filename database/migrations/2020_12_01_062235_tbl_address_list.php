<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAddressList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_address_list', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_address', 5);
            $table -> char('name_address', 100);
            $table -> text('alamat');
            $table -> char('kelurahan', 10);
            $table -> char('kecamatan', 10);
            $table -> char('kabupaten', 10);
            $table -> char('provinsi', 10);
            $table -> char('kordinat', 100);
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
        Schema::dropIfExists('tbl_address_list');
    }
}
