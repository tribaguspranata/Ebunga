<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Import app
 */
use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;

class MailHelperCtr extends Controller
{
    public function newordernotif()
    {
        $kdOrder = "B9lHvVPzXswc0hAKgKnIZR2DpkjKsjIbB2zJwYK9";
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrder) -> first();
        $orderDetails = OrderProdukDetailsMdl::where('kd_order', $kdOrder) -> first();

        $dr = ['kdOrder' => $kdOrder, 'dataOrder' => $dataOrder, 'orderDetails' => $orderDetails];
        return view('layout_email.notif_new_order', $dr);
    }

    public function newapprovenotif()
    {
      $dr = ['status' => 'success'];
        return $dr;
    }
}
