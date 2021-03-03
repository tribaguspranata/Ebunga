<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrasiMail;
/**
 * Import model
 */
use App\Models\KategoriMdl;
use App\Models\ProdukMdl;
/**
 * Import another controller
 */
use App\Http\Controllers\DaerahCtr;
use Mockery\Undefined;

class PageCtr extends Controller
{

    public function home()
    {
        $kategori = KategoriMdl::all();
        $dr = ['kategori' => $kategori, 'page' => 'home'];
        return view('futala_home.home', $dr);
    }

    public function authpage()
    {
      $kategori = KategoriMdl::all();
      $dr = ['kategori' => $kategori, 'page' => 'auth'];
      return view('futala_auth.authpage', $dr);
    }

    public function listproduk($id_produk)
    {
        $dr = ['status' => 'sukses'];

        return \Response::json($dr);
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function teskirimemail()
    {
        $dr = ['nama' => 'dindananinda@gmail.com'];

        Mail::to('addydr@ebunga.co.id') -> send(new RegistrasiMail($dr));

        echo "Email telah terkirim";
    }

    public function logout(Request $request)
    {
        $request -> session() -> flush();
        return redirect('/');
    }

    public function logoutsilent(Request $request)
    {
        $request -> session() -> flush();

        $dr = ['status' => 'sukses'];

        return \Response::json($dr);
    }

}
