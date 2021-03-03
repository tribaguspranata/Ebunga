<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDaerahAdmin1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin_1', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_daerah', 10);
            $table -> char('nama_daerah', 100);
            $table -> char('kode_pos', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin_1');
    }
}
