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
/**
 * Import model
 */
use App\Models\BranchSellerMdl;
use App\Models\ProdukMdl;
use App\Models\KategoriMdl;
use App\Models\VarianProductMdl;

class ProductSellerCtr extends Controller
{

    public function productlist(Request $request)
    {
        /**
         * Get user login session
         */
        $userLogin = $request -> session() -> get('userLogin');
        /**
         * Get kategory from database with model
         */
        $kategoriProduct = KategoriMdl::all();
        /**
         * Get data branch with parameter id_seller & status branch
         */
        $dataBranch = BranchSellerMdl::where('id_seller', $userLogin) -> where('status_branch', 'active') -> get();
        /**
         * Get data product with parameter id_seller
         */
        $dataProduct = ProdukMdl::where('id_seller', $userLogin) -> get();
        /**
         * Devine html output for response
         */
        $divInvalid = 'form-text text-warning';
        /**
         * Create variable
         */
        $dn = 'display:none;';
        /**
         *
         */
        $dr = ['dataProduct' => $dataProduct, 'kategoriProduct' => $kategoriProduct, 'dataBranch' => $dataBranch, 'divError' => $divInvalid, 'dn' => $dn];
        return view('account.seller.product.product_list', $dr);
    }

    public function addproductproses(Request $request)
    {
        // 'var1':var1, 'var2':var2, 'var3':var3, 'var4':var4
        $userLogin = $request -> session() -> get('userLogin');
        $kdProduk = "EBUNGA".rand(1000,10000);
        $name = $request -> name;
        $deks = $request -> deks;
        $kategori = $request -> kategori;
        $subKategori = $request -> subKategori;
        $branch = $request -> branch;
        $price = $request -> price;
        $stock = $request -> stock;
        $picUtama = $request -> picUtama;
        $picVar1 = $request -> var1;
        $picVar2 = $request -> var2;
        $picVar3 = $request -> var3;
        $picVar4 = $request -> var4;
        // clear currency format
        $priceFinal = str_replace(".","", $price);
        // $priceFinalUp = $priceFinal
        $priceUpBath = $priceFinal * 0.2;
        $priceFinalFix = $priceFinal + $priceUpBath;
        $namaPic = $kdProduk.".jpg";
        $tipeSlug = rand(0, 50);
        $cekNamaBunga = ProdukMdl::where('nama_produk', $name) -> count();

        if($cekNamaBunga < 1){
            DB::table('tbl_produk') -> insert ([
                'kd_produk' => $kdProduk,
                'nama_produk' => $name,
                'slug' => Str::kebab($name).'-'.$tipeSlug,
                'deks_produk' => $deks,
                'kategori' => $kategori,
                'sub_kategori' => $subKategori,
                'id_branch' => $branch,
                'id_seller' => $userLogin,
                'harga' => $priceFinalFix,
                'stok' => $stock,
                'foto_utama' => $namaPic,
                'approve' => '0',
                'active' => '1'
            ]);

            // Foto utama
            $image_array_1 = explode(";", $picUtama);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            file_put_contents('ladun/ebunga_asset/image/product/'.$namaPic, $data);
            // Variant 1
            if($picVar1 == null){
            }else{
                $imgVaArr1 = explode(";", $picVar1);
                $imgData1 = explode(",", $imgVaArr1[1]);
                $data_var1 = base64_decode($imgData1[1]);
                $namaVariantPic1 = $kdProduk."_VAR1.jpg";
                file_put_contents('ladun/ebunga_asset/image/product/variant/'.$namaVariantPic1, $data_var1);
                DB::table('tbl_variant_product') -> insert([
                    'kd_variant' => Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5)),
                    'kd_product' => $kdProduk,
                    'nama_variant' => '1',
                    'deks_variant' => 'Variant produk 1',
                    'active' => '1'
                ]);
            }
            // Variant 2
            if($picVar2 == null){
            }else{
                $imgVaArr2 = explode(";", $picVar2);
                $imgData2 = explode(",", $imgVaArr2[1]);
                $data_var2 = base64_decode($imgData2[1]);
                $namaVariantPic2 = $kdProduk."_VAR2.jpg";
                file_put_contents('ladun/ebunga_asset/image/product/variant/'.$namaVariantPic2, $data_var2);
                DB::table('tbl_variant_product') -> insert([
                    'kd_variant' => Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5)),
                    'kd_product' => $kdProduk,
                    'nama_variant' => '2',
                    'deks_variant' => 'Variant produk 2',
                    'active' => '1'
                ]);
            }
            // Variant 3
            if($picVar3 == null){

            }else{
                $imgVaArr3 = explode(";", $picVar3);
                $imgData3 = explode(",", $imgVaArr3[1]);
                $data_var3 = base64_decode($imgData3[1]);
                $namaVariantPic3 = $kdProduk."_VAR3.jpg";
                file_put_contents('ladun/ebunga_asset/image/product/variant/'.$namaVariantPic3, $data_var3);
                DB::table('tbl_variant_product') -> insert([
                    'kd_variant' => Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5)),
                    'kd_product' => $kdProduk,
                    'nama_variant' => '3',
                    'deks_variant' => 'Variant produk 3',
                    'active' => '1'
                ]);
            }
            // Variant 4
            if($picVar4 == null){
            }else{
                $imgVaArr4 = explode(";", $picVar4);
                $imgData4 = explode(",", $imgVaArr4[1]);
                $data_var4 = base64_decode($imgData4[1]);
                $namaVariantPic4 = $kdProduk."_VAR4.jpg";
                file_put_contents('ladun/ebunga_asset/image/product/variant/'.$namaVariantPic4, $data_var4);
                DB::table('tbl_variant_product') -> insert([
                    'kd_variant' => Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5)),
                    'kd_product' => $kdProduk,
                    'nama_variant' => '4',
                    'deks_variant' => 'Variant produk 4',
                    'active' => '1'
                ]);
            }
            $dr = ['status' => 'success'];
        }else{
            $dr = ['status' => 'error_name_product'];
        }
        return \Response::json($dr);
    }

    public function addmainproduct(Request $request)
    {
        $userLogin = $request -> session() -> get('userLogin');
        $kdProduk = "EBUNGA".rand(1000,10000);
        $deksripsi = $request -> deks;
        $nama = $request -> nama;
        $kategori = $request -> kategori;
        $subKategori = $request -> subKategori;
        $branch = $request -> branch;
        $price = $request -> price;
        $stock = $request -> stock;
        $picUtama = $request -> picUtama;
        // create account data for adminstrator
        // clear currency format
        $priceFinal = str_replace(".","", $price);
        $priceUp = ($priceFinal * 20) / 100;
        $priceUpFinal = $priceFinal + $priceUp;
        $namaPic = $kdProduk.".jpg";
        $tipeSlug = rand(0, 50);
        $cekNamaBunga = ProdukMdl::where('nama_produk', $nama) -> count();
        if($cekNamaBunga < 1){
            DB::table('tbl_produk') -> insert ([
                'kd_produk' => $kdProduk,
                'nama_produk' => $nama,
                'slug' => Str::kebab($nama).'-'.$tipeSlug,
                'deks_produk' => $deksripsi,
                'kategori' => $kategori,
                'sub_kategori' => $subKategori,
                'id_branch' => $branch,
                'id_seller' => $userLogin,
                'harga' => $priceFinal,
                'harga_up' => $priceUpFinal,
                'stock' => $stock,
                'foto_utama' => $namaPic,
                'approve' => '0',
                'active' => '1'
            ]);
            // Foto utama
            $namaPic = $kdProduk.".jpg";
            $image_array_1 = explode(";", $picUtama);
            $image_array_2 = explode(",", $image_array_1[1]);
            $mainPic = base64_decode($image_array_2[1]);
            // file_put_contents('ladun/ebunga_asset/image/product/'.$namaPic, $mainPic);
            // $filePicDisk = Storage::url('ladun/ebunga_asset/image/product/'.$namaPic);
            Storage::disk('s3') -> put('product/main-product/'.$namaPic, $mainPic);
            $dr = ['status' => 'sukses', 'kdProduct' => $kdProduk];
        }else{
            $dr = ['status' => 'error_name_product'];
        }
        return \Response::json($dr);
    }

    public function addvariantproduct(Request $request)
    {
        $kdProduk = $request -> kdProduct;
        $kdVariant = "EBUNGA_VAR_".$kdProduk."_".rand(100,10000);
        $nama = $request -> nama;
        $deks = $request -> deks;
        $harga = $request -> harga;
        // clear currency format
        $priceFinal = str_replace(".","", $harga);
        $stock = $request -> stock;
        $pic = $request -> pic;
        $namaPic = $kdVariant.".jpg";
        $imgVarArray = explode(";", $pic);
        $image_array_2 = explode(",", $imgVarArray[1]);
        $varPic = base64_decode($image_array_2[1]);
        Storage::disk('s3') -> put('product/variant/'.$namaPic, $varPic);
        DB::table('tbl_variant_product') -> insert ([
            'kd_variant' => $kdVariant,
            'kd_product' => $kdProduk,
            'nama_variant' => $nama,
            'deks_variant' => $deks,
            'harga' => $priceFinal,
            'stock' => $stock,
            'active' => '1'
        ]);
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }


}
