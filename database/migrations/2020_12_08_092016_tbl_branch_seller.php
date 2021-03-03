<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBranchSeller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_branch_seller', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_branch', 50);
            $table -> char('nama_branch', 100);
            $table -> char('id_seller', 30);
            $table -> text('alamat');
            $table -> char('phone', 20);
            $table -> char('email', 50);
            $table -> datetime('waktu_pengajuan', 0) -> nullable();
            $table -> datetime('waktu_approve') -> nullable();
            $table -> char('status_branch', 50);
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
        Schema::dropIfExists('tbl_branch_seller');
    }
}
