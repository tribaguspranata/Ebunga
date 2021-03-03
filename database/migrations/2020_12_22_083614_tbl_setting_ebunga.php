<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblSettingEbunga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tbl_setting_ebunga', function (Blueprint $table) {
        //     $table -> id();
        //     $table -> char('kd_setting', 10);
        //     $table -> char('caption', 50);
        //     $table -> char('value', 150);
        //     $table -> char('tipe', 100);
        //     $table -> char('active', 1);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tbl_setting_ebunga');
    }
}
