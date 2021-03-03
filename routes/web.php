<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageCtr;
use App\Http\Controllers\ProductCtr;
use App\Http\Controllers\RegisterCtr;
use App\Http\Controllers\TestingCtr;
use App\Http\Controllers\LoginCtr;
use App\Http\Controllers\DashboardCtr;
use App\Http\Controllers\CustomerCtr;
use App\Http\Controllers\SellerCtr;
use App\Http\Controllers\DaerahCtr;
use App\Http\Controllers\ProductSellerCtr;
use App\Http\Controllers\HelperCtr;
use App\Http\Controllers\BranchSellerCtr;
use App\Http\Controllers\OrderCtr;
use App\Http\Controllers\MailHelperCtr;
use App\Http\Controllers\EmailViewHelperCtr;
use App\Http\Controllers\AdminOrderCtr;
use App\Http\Controllers\OrderSellerCtr;
use App\Http\Controllers\BranchAdminCtr;

/**
 * Main page
 */
Route::get('/', [PageCtr::class, 'home']);
/**
 * Login
 */
Route::get('/auth/account', [PageCtr::class, 'authpage']);
Route::post('/auth/login/proses', [LoginCtr::class, 'loginproses']);
Route::post('/auth/register/proses', [RegisterCtr::class, 'registerproses']);
/**
 * Register
 */
Route::get('/register', [RegisterCtr::class, 'registerpage']);
Route::get('/register/ref/{referral_id}', [RegisterCtr::class, 'registerwithreferral']);


Route::get('/aktivasi-akun/{kodeaktivasi}', [RegisterCtr::class, 'aktivasiakun']);

/**
 * Product prefix
 * product/kat-all/area-all/tipe-all
 */
Route::get('/product/{kategory}/{area}', [ProductCtr::class, 'productview']);
Route::get('/product', [ProductCtr::class, 'all']);
Route::get('/product/{id_product}', [ProductCtr::class, 'productdetails']);
Route::get('/rest/product/variant/{id_product}', [ProductCtr::class, 'restvariantproductdetails']);
Route::get('/rest/product/main/{id_product}', [ProductCtr::class, 'restmainproductdetails']);
Route::post('/rest/product/list/default', [ProductCtr::class, 'restdefaultproduct']);
Route::post('/rest/product/getProductByKelurahan', [ProductCtr::class, 'getproductbykelurahan']);
Route::post('/order/save-temp', [OrderCtr::class, 'savetemporder']);

/**
 * Order
 */
Route::post('/order/submit/new-order', [OrderCtr::class, 'submitneworder']); //submit new order
Route::get('/order/bank-account', [OrderCtr::class, 'bankaccount']);
Route::get('/order/{kd_order}', [OrderCtr::class, 'orderstatusfront']);
Route::post('/order/verify-payment-admin', [AdminOrderCtr::class, 'verifypayment']);
/**
 * Payment
 */

/**
 * Customer (Buyer)
 */
Route::group(['middleware' => 'CekUser'], function () {
    Route::get('/account', [DashboardCtr::class, 'dashboard']);
});

Route::get('/account/dashboard', [CustomerCtr::class, 'dashboard']);
/**
 * Seller
 */
Route::get('/account/seller', [DashboardCtr::class, 'sellerdashboard']);
Route::get('/account/seller/dashboard', [SellerCtr::class, 'sellerdashboard']);
Route::get('/account/seller/branch', [SellerCtr::class, 'sellerbranch']);

/**
 * Branch routing
 */
Route::get('/account/seller/branch/coverage-area', [BranchSellerCtr::class, 'coverageareabranch']);
Route::get('/account/seller/branch/cek-branch-location/{idBranch}', [BranchSellerCtr::class, 'cekbranchlocation']);
Route::get('/account/seller/branch/detail/{id_branch}', [BranchSellerCtr::class, 'detailbranch']);
Route::get('/account/seller/branch/get-data-kelurahan-for-marker/{id_kelurahan}', [BranchSellerCtr::class, 'getdatakelurahanformarker']);
Route::get('/account/seller/branch/get-branch-coverage-area/{id_branch}', [BranchSellerCtr::class, 'getbranchcoveragearea']);
Route::post('/account/seller/branch/apply-new-branch', [BranchSellerCtr::class, 'applynewbranch']);
Route::post('/account/seller/branch/save-coverage-area', [BranchSellerCtr::class, 'savecoveragearea']);
Route::post('/account/seller/branch/clear-coverage-area', [BranchSellerCtr::class, 'clearcoveragearea']);

/**
 * Product management (Seller)
 */
Route::get('/account/seller/product/list', [ProductSellerCtr::class, 'productlist']);
Route::post('/account/seller/product/add/variant', [ProductSellerCtr::class, 'addvariantproduct']);
Route::post('/account/seller/product/add/main-product', [ProductSellerCtr::class, 'addmainproduct']);

/**
 * Order management (Seller)
 */
Route::get('/account/seller/order/list', [OrderSellerCtr::class, 'orderlist']);
Route::get('/account/seller/order/details/{kdOrder}', [OrderSellerCtr::class, 'orderdetails']);

/**
 * Logout
 */
Route::get('/logout', [PageCtr::class, 'logout']);
Route::get('/logout/silent', [PageCtr::class, 'logoutsilent']);

/**
 * Contact page
 */
Route::get('/contact', [PageCtr::class, 'contact']);

/**
 * Cek coverage area with slug & kd produk
 */
Route::post('/product/checkarea', [ProductCtr::class, 'checkarea']);
/**
 * Cek area only slug
 */
Route::post('/product/check-area-slug-only', [ProductCtr::class, 'checkslugonly']);

/**
 * Tes kirim email
 */
Route::get('/tes-kirim-email', [PageCtr::class, 'teskirimemail']);

// View email layout
Route::get('/tes-email-notifikasi-pembelian-baru', [MailHelperCtr::class,'newordernotif']);

/**
 * Tes kirim wa
 */
Route::post('/tes-kirim-wa', [HelperCtr::class, 'kirimPesanGuzzle']);

/**
 * Cek email via registrasi
 */
Route::get('/cek-view-email-registrasi', [TestingCtr::class, 'viewemailregistrasi']);

/**
 * REST Order Product
 */


/**
 * REST Without csrf
 */
Route::get('/get/location/provinsi-all', [DaerahCtr::class, 'getProvinsiAll']);
Route::get('/get/location/kabupaten/{id_provinsi}', [DaerahCtr::class, 'getKabupaten']);
Route::get('/get/location/kecamatan/{id_kabupaten}', [DaerahCtr::class, 'getKecamatan']);
Route::get('/get/location/kelurahan/{id_kecamatan}', [DaerahCtr::class, 'getKelurahan']);
Route::get('/get/sub-kategori/{id_kategori}', [HelperCtr::class, 'getsubkategori']);
Route::get('/get/location/fork/{kdKelurahan}', [DaerahCtr::class, 'getforkarea']);

Route::post('/get/location/provinsi', [DaerahCtr::class, 'getProvinsiPost']);
Route::post('/get/location/kelurahan', [DaerahCtr::class, 'getKelurahanPost']);
Route::post('/update/kelurahan/order', [DaerahCtr::class, 'updatekelurahanorder']);
Route::post('/rest/approve-branch-seller', [BranchAdminCtr::class, 'approvebranchseller']);

/**
 * Email preview
 */
Route::get('/emailpreview/registrasiuser', [EmailViewHelperCtr::class, 'registrasiuser']);
Route::get('/emailpreview/neworderadmin', [EmailViewHelperCtr::class, 'neworderadmin']);
Route::get('/email/preview/neworderseller', [EmailViewHelperCtr::class, 'neworderseller']);
