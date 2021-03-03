<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTimeline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_timeline', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_timeline', 50);
            $table -> char('event', 50);
            $table -> char('kd_subject', 200);
            $table -> char('title', 50);
            $table -> text('caption');
            $table -> char('object');
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
        Schema::dropIfExists('tbl_timeline');
    }
}
