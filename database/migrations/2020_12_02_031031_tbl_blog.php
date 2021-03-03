<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_article', 100);
            $table -> char('title', 100);
            $table -> char('sub_title', 100);
            $table -> text('isi');
            $table -> date('date_publish');
            $table -> char('publish', 1);
            $table -> char('active', 1);
            $table -> char('kategori', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_blog');
    }
}
