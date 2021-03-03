<?php
/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
 * Import model
 */
use App\Models\ProvinsiMdl;
use App\Models\KabupatenMdl;
use App\Models\KecamatanMdl;
use App\Models\KelurahanMdl;
/**
 * Import another controller
 */

class DaerahCtr extends Controller
{

    public function getProvinsiAll()
    {
        /**
         * Get data provinsi with model
         */
        $provinsi = ProvinsiMdl::all();
        /**
         * Add data provinsi to variabel
         */
        $dr = ['provinsi' => $provinsi];
        /**
         * Return response json format
         */
        return \Response::json($dr);
    }

    public function getProvinsiPost(Request $request)
    {
        /**
         * Slug data
         */
        $slug = $request -> searchTerm;
        $provinsi = ProvinsiMdl::where('nama', 'like', '%'.$slug.'%') -> get();
        $data = array();
        foreach($provinsi as $provinsi){
            $data[] = array("id" => $provinsi['id_prov'], "text" => $provinsi['nama']);
        }
        return \Response::json($data);
    }

    public function getKelurahanPost(Request $request)
    {
        $slug = $request -> searchTerm;
        $kelurahanData = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> get();
        $data = array();
        foreach($kelurahanData as $kelurahan)
        {
            $kecamatanData = KecamatanMdl::where('id_kec', $kelurahan -> id_kec) -> first();
            $kabupatenData = KabupatenMdl::where('id_kab', $kecamatanData -> id_kab) -> first();
            $provinsiData = ProvinsiMdl::where('id_prov', $kabupatenData -> id_prov) -> first();
            $output = $kelurahan['nama']." , ".$kecamatanData -> nama." , ".$kabupatenData -> nama." , ".$provinsiData -> nama;
            $data[] = array("id" => $kelurahan['id_kel'], "text" => $output);
        }
        return \Response::json($data);
    }

    public function getKabupaten($id_provinsi)
    {
        $kabupaten = KabupatenMdl::where('id_prov', $id_provinsi) -> get();
        $dr = ['kabupaten' => $kabupaten];
        return \Response::json($dr);
    }

    public function getKecamatan($id_kabupaten)
    {
        $kecamatan = KecamatanMdl::where('id_kab', $id_kabupaten) -> get();
        $dr = ['kecamatan' => $kecamatan];
        return \Response::json($dr);
    }

    public function getKelurahan($id_kecamatan)
    {
        $kelurahan = KelurahanMdl::where('id_kec', $id_kecamatan) -> get();
        $dr = ['kelurahan' => $kelurahan];
        return \Response::json($dr);
    }

    public function getforkarea($kd_kelurahan)
    {
      $dataKelurahan = KelurahanMdl::where('id_kel', $kd_kelurahan) -> first();
      $dataKecamatan = KecamatanMdl::where('id_kec', $dataKelurahan -> id_kec) -> first();
      $dataKabupaten = KabupatenMdl::where('id_kab', $dataKecamatan -> id_kab) -> first();
      $dataProvinsi = ProvinsiMdl::where('id_prov', $dataKabupaten -> id_prov) -> first();
      $dataAllKelurahan = KelurahanMdl::where('id_kec', $dataKelurahan -> id_kec) -> get();
      $dataAllKecamatan = KecamatanMdl::where('id_kab', $dataKecamatan -> id_kab) -> get();
      $dataAllKabupaten = KabupatenMdl::where('id_prov', $dataProvinsi -> id_prov) -> get();
      $dataAllProvinsi = ProvinsiMdl::all();

      $dr = [
        'status' => 'sukses',
        'dataKelurahan' => $dataKelurahan,
        'dataKecamatan' => $dataKecamatan,
        'dataKabupaten' => $dataKabupaten,
        'dataProvinsi' => $dataProvinsi,
        'dataAllKelurahan' => $dataAllKelurahan,
        'dataAllKecamatan' => $dataAllKecamatan,
        'dataAllKabupaten' => $dataAllKabupaten,
        'dataAllProvinsi' => $dataAllProvinsi
      ];
      return \Response::json($dr);
    }

    public function updatekelurahanorder(Request $request)
    {
      $kdKelurahan = $request -> kelurahan;
      session(['kelurahanOrder' => $kdKelurahan]);
      $dr = ['status' => 'sukses', 'kdKelurahan' => $kdKelurahan];
      return \Response::json($dr);
    }

}






























//
