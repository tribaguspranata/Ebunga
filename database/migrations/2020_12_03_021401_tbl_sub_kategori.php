<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSubKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sub_kategori', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_sub_kategori', 100);
            $table -> char('nama_kategori', 100);
            $table -> char('slug', 200);
            $table -> char('kd_kategori', 100);
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
        Schema::dropIfExists('tbl_sub_kategori');
    }
}
