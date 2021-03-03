<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
 * Import app
 */
use App\Models\ProdukMdl;
use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;

class CustomerCtr extends Controller
{
    public function dashboard()
    {
        return view('account.customer.dashboard');
    }

    public function order()
    {

    }

    public function orderDetails($kdOrder)
    {

    }
}
