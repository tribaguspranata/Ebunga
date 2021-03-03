<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;
use App\Models\ProdukMdl;
use App\Models\BranchSellerMdl;

class OrderSellerCtr extends Controller
{
    public function orderlist()
    {
        $userLogin = session('userLogin');
        $dataOrder = OrderProdukMdl::where('id_seller', $userLogin) -> get();
        $dr = ['sellerId' => $userLogin, 'dataOrder' => $dataOrder];
        return view('account.seller.order.order_list', $dr);
    }
    public function orderdetails($kdOrder)
    {
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrder) -> first();
        $detailOrder = OrderProdukDetailsMdl::where('kd_order', $kdOrder) -> first();
        $dataProduct = ProdukMdl::where('kd_produk', $dataOrder -> kd_product) -> first();
        $waktu =  date("F jS, Y", strtotime($dataOrder -> waktu));
        $dr = [
            'kdOrder' => $kdOrder,
            'dataOrder' => $dataOrder,
            'detailOrder' => $detailOrder,
            'dataProduct' => $dataProduct,
            'waktu' => $waktu
        ];
        return view('account.seller.order.order_details', $dr);
    }

    public function getIdKelurahan()
    {

    }

}
