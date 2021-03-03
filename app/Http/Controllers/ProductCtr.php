<?php
/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Ebunga (ebunga.co.id), 2020
 * @package laravel
 * @subpackage Controller
 */

/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
/**
 * Import app
 */
use App\Models\ProdukMdl;
use App\Models\KelurahanMdl;
use App\Models\KecamatanMdl;
use App\Models\CoverageAreaMdl;
use App\Models\KategoriMdl;
use App\Models\SubKategoriMdl;
use App\Models\BranchSellerMdl;
use App\Models\KabupatenMdl;
use App\Models\ProvinsiMdl;
use App\Models\VarianProductMdl;
use App\Http\Controllers\HelperCtr;

class ProductCtr extends Controller
{
    protected $helperCtr;

    public function __construct(helperCtr $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }

    public function productview($kategory, $area)
    {
        $catEx = Str::of($kategory) -> explode('cat-');
        $categorySlug = $catEx[1];
        $areaEx = Str::of($area) -> explode('area-');
        $areaSlug = $areaEx[1];
        if($categorySlug == 'all' && $areaSlug === 'all'){
            return redirect('product');
        }else{
            if($areaSlug == 'all'){
                $dataSubKategori = SubKategoriMdl::where('slug', $categorySlug) -> first();
                $kategoriProduct = KategoriMdl::all();
                $kdSubKategori = $dataSubKategori -> kd_sub_kategori;
                /**
                 * get data produk with sub kategory
                 */
                $dataProduct = ProdukMdl::where('sub_kategori', $kdSubKategori) -> get();

                // $dr = ['page' => 'Kategory Details', 'categorySlug' => $categorySlug, 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'dataProduct' => $dataProduct, 'dataKategori' => $kategoriProduct];
                $dr = ['kategori' => $kategoriProduct, 'page' => 'product_filter', 'dataProduct' => $dataProduct, 'subKategori' => $kdSubKategori];
                return view('futala_product.filter', $dr);
            }else{
                /**
                 * Get slug area
                 */
                $slugClearToNormal = str_replace("-", " ", $areaSlug);
                $slugToCaps = Str::title($slugClearToNormal);
                /**
                 * Get kd kelurahan
                 *
                 * */
                $dataKel = KelurahanMdl::where('nama', $slugToCaps) -> first();
                $idKel = $dataKel -> id_kel;
                // with area
                $dataCoverage = CoverageAreaMdl::where('kd_area', $idKel) -> get();
                $dataR = array();
                $kategoriProduct = KategoriMdl::all();
                foreach($dataCoverage as $coverage){
                    $kdBranch = $coverage -> kd_branch;
                    $slugKdKategoriClearToNormal = str_replace("-", "", $categorySlug);
                    //cari berdasarkan branch dan kd sub kategori
                    $kdKategori = Str::upper($slugKdKategoriClearToNormal);
                    $dataProduct = ProdukMdl::where('sub_kategori', $kdKategori) -> where('id_branch', $kdBranch) -> get();
                    foreach($dataProduct as $product){
                        $arrTemp['nama_produk'] = $product -> nama_produk;
                        $arrTemp['slug'] = $product -> slug;
                        $arrTemp['deks_produk'] = $product -> deks_produk;
                        $arrTemp['kategori'] = $product -> kategori;
                        $arrTemp['sub_kategori'] = $product -> sub_kategori;
                        $arrTemp['id_branch'] = $product -> id_branch;
                        $arrTemp['id_seller'] = $product -> id_seller;
                        $arrTemp['harga'] = $product -> harga;
                        $arrTemp['stok'] = $product -> stok;
                        $arrTemp['foto_utama'] = $product -> foto_utama;
                    }
                    $dataR[] = $arrTemp;
                }
                $dr = ['kategori' => $kategoriProduct, 'page' => 'product_filter'];
                return view('futala_product.filter', $dr);
            }
        }

    }

    public function all()
    {
        /**
         * Get data product from database with model
         */
        $dataProduct = ProdukMdl::take(5) -> get();
        /**
         * Get data kategori from database with model
         */
        $kategoriProduct = KategoriMdl::all();
        /**
         * Create data css, js
         */
        $cssFile    = 'style-homev3.css';
        $jsFile     = 'ebunga-product-all.js';
        /**
         * Create variable to send the respons
         */
        $dr = ['page' => 'Home', 'cssFile' => $cssFile, 'categorySlug' => 'all', 'jsFile' => $jsFile, 'dataproduct' => $dataProduct, 'dataKategori' => $kategoriProduct];
        /**
         * Return view
         */
        return view('product.all', $dr);
    }

    public function checkarea(Request $request)
    {
        /**
         * Get request from POST data
         */
        $slug       = $request -> slug;
        $kdProduk   = $request -> kd_produk;
        /**
         * Get id branch from data product
         */
        $dataProduk = ProdukMdl::where('kd_produk', $kdProduk) -> first();
        $idBranch   = $dataProduk -> id_branch;
        /**
         * Get data kelurahan from tabel kelurahan
         */
        $daerah = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(7) -> get();
        /**
         * Create variable header to result
         */
        $resultView = "<table class='table table-home-coverage-area'>";
        /**
         * Foreach data daerah to create result object
         */
        foreach($daerah as $da){
            /**
             * Get id kelurahan & id kecamatan
             */
            $idKel = $da -> id_kel;
            $idKec = $da -> id_kec;
            /**
             * Get kecamatan name from database with model
             */
            $dataKec = KecamatanMdl::where('id_kec', $idKec) -> first();
            $namaKec = $dataKec -> nama;
            /**
             * Get total area from database with model
             */
            $cekArea = CoverageAreaMdl::where('kd_area', $idKel) -> where('kd_branch', $idBranch) -> count();
            /**
             * If total area 1, area will coverage
             */
            if($cekArea == 1){
                /**
                 * Create button for select area
                 */
                $status_cover = "<a href='javascript:void(0)' class='btn-pilih-coverage' onclick='selectArea(\"".$idKel."\")'>Select</a>";
            }else{
                /**
                 * Caption area not corverage
                 */
                $status_cover = "<small>Sorry, this area not coverage ...</small>";
            }
            /**
             * Result view data to add name, cover status, kecamatan name
             */
            $resultView .= "<tr><td>".$da -> nama."<br/><small>".$namaKec."</small></td><td>".$status_cover."</td></tr>";
        }
        /**
         * End for result view
         */
        $resultView .= "</table>";
        /**
         * Send response to html
         */
        return $resultView;
    }

    public function checkslugonly(Request $request)
    {
        /**
         * Get dat slug
         */
        $slug = $request -> slugKelurahan;
        $kdCategory = $request -> kdSlugKategory;
        $dataKel = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(7) -> get();
        $resultView = "<table class='table table-home-coverage-area'>";
        foreach($dataKel as $kel){
            $resultView .= "<tr>";
            $resultView .= "<td>".$kel -> nama."</td>";
            $resultView .= "<td><a href='".url('product/cat-'.$kdCategory.'/area-'.Str::kebab($kel -> nama))."'><i class='fas fa-search'></i></a></td>";
            $resultView .= "</tr>";
        }
        $resultView .= "</table>";
        return $resultView;
    }

    public function productdetails($idProduct)
    {
        // @session
        $kdKelurahan = session('kelurahanOrder');
        $dataProduct = ProdukMdl::where('slug', $idProduct) -> first();
        $dataVariant = VarianProductMdl::where('kd_product', $dataProduct -> kd_produk) -> get();
        $dataBranch = BranchSellerMdl::where('kd_branch', $dataProduct -> id_branch) -> first();
        $alamatEx = explode("-", $dataBranch -> alamat);
        $dataProvinsi = ProvinsiMdl::where('id_prov', $alamatEx[3]) -> first();
        $dataKabupaten = KabupatenMdl::where('id_kab', $alamatEx[2]) -> first();
        $dataKelurahan = KelurahanMdl::where('id_kel', $kdKelurahan) -> first();
        $dataKecamatan = KecamatanMdl::where('id_kec', $alamatEx[1]) -> first();
        $dataAlamat = [
          'namaProvinsi' => $dataProvinsi -> nama,
          'namaKabupaten' => $dataKabupaten -> nama,
          'dataKecamatan' => $dataKecamatan,
          'namaKelurahan' => $dataKelurahan -> nama,
          'namaKecamatan' => $dataKecamatan -> nama
        ];
        $kategoriProduct = KategoriMdl::all();
        $dr = [
          'kategori' => $kategoriProduct,
          'page' => 'details_product',
          'dataProduct' => $dataProduct,
          'dataVariant' => $dataVariant,
          'dataAlamat' => $dataAlamat,
          'kdKelurahan' => $kdKelurahan
        ];
        return view('futala_product.details_product', $dr);
    }

    public function productkategory($idKategori)
    {
        $dataProduct = ProdukMdl::where('sub_kategori', $idKategori) -> get();
        $kategoriProduct = KategoriMdl::all();
        $cssFile = 'style-homev3.css';
        $jsFile = 'ebunga-product-all.js';
        $dr = ['page' => 'Home', 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'dataproduct' => $dataProduct, 'dataKategori' => $kategoriProduct];
        return view('product.all', $dr);
    }

    public function restvariantproductdetails($idProduct)
    {
        /**
         * Get data product
         */
        $dataProduct = VarianProductMdl::where('kd_variant', $idProduct) -> first();
        $dr = ['dataProduct' => $dataProduct];
        return \Response::json($dr);
    }

    public function restmainproductdetails($idProduct)
    {
        /**
         * Clear format
         */
        $capKdProduk = Str::replaceFirst('.jpg', '', $idProduct);
        $dataProduct = ProdukMdl::where('kd_produk', $capKdProduk) -> first();
        $dr = ['dataProduct' => $dataProduct];
        return \Response::json($dr);
    }

    public function restdefaultproduct(Request $request)
    {
        $kategori = ($request -> has('kategori') ? $request -> kategori : 'default');
        $kelurahan = ($request -> has('kelurahan') ? $request -> kelurahan : 'all');

        if($kategori == 'default'){

        }else{
            if($kelurahan == 'all'){
                $produk = ProdukMdl::where('sub_kategori', $kategori) -> get();
            }else{
                $totalCoverage = CoverageAreaMdl::where('kd_area', $kelurahan) -> count();
                if($totalCoverage < 1){
                  $dr = ['status' => 'no_product'];
                  return \Response::json($dr);
                  die();
                }else{
                  $coverageArea = CoverageAreaMdl::where('kd_area', $kelurahan) -> first();
                  $dataBranch = BranchSellerMdl::where('kd_branch', $coverageArea -> kd_branch) -> first();
                  $produk = ProdukMdl::where('sub_kategori', $kategori) -> where('id_branch', $dataBranch -> kd_branch) -> get();
                }
            }
        }

        $dataProduct = array();

        foreach($produk as $prod){
            $tv['nama'] = $prod['nama_produk'];
            $tv['kd'] = $prod['kd_produk'];
            $tv['foto'] = $prod['foto_utama'];
            $tv['kabupaten'] = $this -> helperCtr -> getKabupatenNameFromBranch($prod['id_branch']);
            $tv['harga'] = $prod['harga'];
            $tv['slug'] = $prod['slug'];
            $tv['deks'] = $prod['deks_produk'];
            $dataProduct[] = $tv;
        }

        $dr = ['status' => 'sukses', 'kategori' => $kategori, 'produk' => $dataProduct, 'kelurahan' => $kelurahan];
        return \Response::json($dr);
    }

    public function getproductbykelurahan()
    {

    }

}
