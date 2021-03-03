<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblActivityUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_activity_user', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_activity', 100);
            $table -> char('user', 100);
            $table -> char('tipe', 50);
            $table -> text('desc');
            $table -> char('to_subject', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_activity_user');
    }
}
