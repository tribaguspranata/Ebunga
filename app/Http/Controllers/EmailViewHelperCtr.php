<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\OrderProdukDetailsMdl;
use App\Models\OrderProdukMdl;
use App\Models\ProdukMdl;

class EmailViewHelperCtr extends Controller
{

    public function registrasiuser()
    {
        $email = 'alditha.forum@gmail.com';
        $token_aktivasi = '1244334';
        $dr = ['email' => $email, 'website' => 'ebunga.co.id', 'token_aktivasi' => $token_aktivasi];
        return view('layout_email.notif_new_registrasi', $dr);
    }

    public function neworderadmin()
    {
        $kdOrder = "QOFPHOu6ilag3wdvMc3OFXHAdXE1qKm5f35tqT5E";
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrder) -> first();
        $dataProduk = ProdukMdl::where('kd_produk', $dataOrder -> kd_product) -> first();;
        $orderDetails = OrderProdukDetailsMdl::where('kd_order', $kdOrder) -> first();
        $dr = ['orderDetails' => $orderDetails, 'dataProduk' => $dataProduk];
        return view('layout_email.notif_new_order_admin', $dr);
    }

    public function neworderseller()
    {
        $kdOrder = "QOFPHOu6ilag3wdvMc3OFXHAdXE1qKm5f35tqT5E";
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrder) -> first();
        $dataProduk = ProdukMdl::where('kd_produk', $dataOrder -> kd_product) -> first();;
        $orderDetails = OrderProdukDetailsMdl::where('kd_order', $kdOrder) -> first();
        $dr = ['orderDetails' => $orderDetails, 'dataProduk' => $dataProduk];
        return view('layout_email.notif_new_order_seller', $dr);
    }
}
