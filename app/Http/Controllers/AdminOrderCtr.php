<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\NotifikasiOrderOperator;
use App\Mail\NotifikasiOrderSeller;

class AdminOrderCtr extends Controller
{
    public function verifypayment(Request $request)
    {
        $kdOrder = $request -> kdOrder;
        DB::table('tbl_order_details') -> where('kd_order', $kdOrder) -> update(['status_payment' => 'success', 'status_order' => 'MENUNGGU_KONFIRMASI_SELLER', 'status_approve' => 'y']);
        /**
         * Kirim email notifikasi order ke seller
         */
        $dre = ['kdOrder' => $kdOrder];
        Mail::to('alditha.forum@gmail.com') -> send(new NotifikasiOrderSeller($dre));
        echo "sukses verifikasi";
    }
}
