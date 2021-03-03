<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
// import model
use App\Models\BranchSellerMdl;
use App\Models\ProvinsiMdl;
use App\Models\KabupatenMdl;
use App\Models\KecamatanMdl;
use App\Models\KelurahanMdl;

class SellerCtr extends Controller
{

    public function sellerdashboard()
    {
        
        return view('account.seller.dashboard');
    }

    public function sellerbranch(Request $request)
    {
        $userLogin = $request -> session() -> get('userLogin');
        $branch = BranchSellerMdl::where('id_seller', $userLogin) -> get();
        $countrySupport = DB::table('tbl_country_support') -> get();
        $dr = ['dataBranch' => $branch, 'countrySupport' => $countrySupport];
        return view('account.seller.branch.branch', $dr);
    }

    

    

    

}
