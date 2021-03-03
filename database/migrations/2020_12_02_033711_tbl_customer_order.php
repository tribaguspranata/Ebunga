<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCustomerOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer_order', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_order', 10);
            $table -> char('customer', 100);
            $table -> integer('total_item');
            $table -> integer('total_charge');
            $table -> integer('disc');
            $table -> timestamp('order_time', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_customer_order');
    }
}
