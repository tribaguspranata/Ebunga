<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// import model 


class DashboardCtr extends Controller
{
    public function dashboard(Request $request)
    {
        $linkPicTemp = "https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/product/product-01.jpg";
        $userLogin = $request -> session() -> get('userLogin');
        $page = 'customerDashboard';
        $pageTitle = "Dashboard Customer";
        $dr = ['userLogin' => $userLogin, 'linkPic' => $linkPicTemp, 'page' => $page, 'pageTitle' => $pageTitle];
        return view('account.dashboard_customer', $dr);
    }

    public function sellerdashboard(Request $request)
    {
        // abort(404);
        $userLogin = $request -> session() -> get('userLogin');
        $pageTitle = 'Dashboard Seller';
        $page = 'sellerDashboard';
        $dr = ['userLogin' => $userLogin, 'page' => $page, 'pageTitle' => $pageTitle];
        return view('account.dashboard_seller', $dr);
    }
}
