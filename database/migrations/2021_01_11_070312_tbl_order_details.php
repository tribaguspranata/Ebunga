<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblOrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order_details', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_order', 50);
            $table -> char('kategori', 50);
            $table -> char('sub_kategori', 50);
            $table -> char('sender_name', 100);
            $table -> char('receiver_name', 100);
            $table -> char('receiver_email', 100);
            $table -> char('receiver_phone', 100);
            $table -> text('note_to_seller');
            $table -> text('greeting_card_note');
            $table -> text('board_note') -> nullable();
            $table -> text('caption_on_cake') -> nullable();
            $table -> date('delivery_date');
            $table -> char('delivery_address', 100);
            $table -> text('delivery_details_address');
            $table -> char('status_approve', 1);
            $table -> char('status_payment', 100);
            $table -> char('status_order', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order_details');
    }
}
