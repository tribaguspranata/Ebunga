<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
/**
 * Import app
 */
use App\Models\SubKategoriMdl;
use App\Mail\NotifikasiOrderOperator;
use App\Models\BranchSellerMdl;
use App\Models\KabupatenMdl;

class HelperCtr extends Controller
{

    function getKabupatenNameFromBranch($idBranch)
    {
        $dataBranch = BranchSellerMdl::where('kd_branch', $idBranch) -> first();
        $alamatEx = explode("-", $dataBranch -> alamat);
        $dataKabupaten = KabupatenMdl::where('id_kab', $alamatEx[2]) -> first();
        return $dataKabupaten -> nama;
    }

    function getsubkategori($idKategori)
    {
        /**
         * Get data sub kategori
         */
        $dataSubKategori = SubKategoriMdl::where('kd_kategori', $idKategori)->get();
        /**
         * Respon data
         */
        $dr = ['dataSubKategori' => $dataSubKategori];
        return \Response::json($dr);
    }

    public function tesuploads3(Request $request)
    {
        $file = $request -> file('avatar');
        $filename = $request -> nama_file . '.' . $file -> getClientOriginalExtension();
        Storage::disk('s3') -> put('slider/' . $filename, file_get_contents($file));
        echo "berhasil upload";
    }

    public function kirimPesanGuzzle(Request $request)
    {
        $url = env('WOOWA_ENDPOINT');
        $noHp = "082272177022";
        $key = env('WOOWA_API');
        $message = $request -> pesan;
        $data = array("phone_no" => $noHp, "key" => $key, "message" => $message);
        $data_string = json_encode($data);
        $response = Http::withHeaders(['Content-Type' => 'application/json', 'Content-Length' => strlen($data_string)]) -> post($url, $data);
        echo $response -> body();
    }

    public function newordernotif()
    {
        $kdOrder = "";
        // Mail::to('alditha.forum@gmail.com') -> send(new NotifikasiOrderOperator());
        return view('layout_email.notif_new_order');
        // echo "berhasil kirim email";
    }
}
