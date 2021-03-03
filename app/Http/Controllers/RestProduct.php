<?php
// import namespace
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// import model 
use App\Models\ProdukMdl;
// import another controller 

class RestProduct extends Controller
{
    public function detailproduct($id_product)
    {
        $detail_product = ProdukMdl::where('kd_produk', $id_product) -> first();
        $dr = ['product' => $detail_product];
        return \Response::json($dr);
    }
}
