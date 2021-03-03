<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Kategori produk
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'BUNGA',
            'nama_kategori' => 'Bunga',
            'deksripsi' => 'Kategori bunga',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'PAPANBUNGA',
            'nama_kategori' => 'Papan Bunga',
            'deksripsi' => 'Kategori papan bunga',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'PARCEL',
            'nama_kategori' => 'Parcel',
            'deksripsi' => 'Kategori parcel',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'CAKE',
            'nama_kategori' => 'Cake',
            'deksripsi' => 'Kategori cake',
            'active' => '1'
        ]);
        // Sub kategori
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PAPANBUNGAKONV1SIDE',
            'nama_kategori' => 'Papan Bunga Konvensional 1 side',
            'slug' => 'papan-bunga-konvensional-1-side',
            'kd_kategori' => 'PAPANBUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PAPANBUNGAKONV2SIDE',
            'nama_kategori' => 'Papan Bunga Konvensional 2 side',
            'slug' => 'papan-bunga-konvensional-2-side',
            'kd_kategori' => 'PAPANBUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PAPANBUNGADIGMINI',
            'nama_kategori' => 'Papan Bunga Digital Mini',
            'slug' => 'papan-bunga-digital-mini',
            'kd_kategori' => 'PAPANBUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PAPANBUNGADIGBESAR',
            'nama_kategori' => 'Papan Bunga Digital Besar',
            'slug' => 'papan-bunga-digital-besar',
            'kd_kategori' => 'PAPANBUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGABUKETSEGAR',
            'nama_kategori' => 'Bunga Buket Segar',
            'slug' => 'bunga-buket-segar',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGAMEJABERDIRI',
            'nama_kategori' => 'Bunga Meja Berdiri',
            'slug' => 'bunga-meja-berdiri',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGABERDIRISEGAR',
            'nama_kategori' => 'Bunga Berdiri Segar',
            'slug' => 'bunga-meja-berdiri-segar',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGABUKETART',
            'nama_kategori' => 'Bunga Buket Artificial',
            'slug' => 'bunga-buket-artificial',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGAMEJAART',
            'nama_kategori' => 'Bunga Meja Artificial',
            'slug' => 'bunga-meja-artificial',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGABERDIRIART',
            'nama_kategori' => 'Bunga Berdiri Artificial',
            'slug' => 'bunga-berdiri-artificial',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGABUKETKOMBINASI',
            'nama_kategori' => 'Bunga Buket Kombinasi',
            'slug' => 'bunga-buket-kombinasi',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'KUEULANGTAHUN',
            'nama_kategori' => 'Kue Ulang Tahun',
            'slug' => 'kue-ulang-tahun',
            'kd_kategori' => 'CAKE',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'KUEACARA',
            'nama_kategori' => 'Kue Acara Perayaan',
            'slug' => 'kue-acara-perayaan',
            'kd_kategori' => 'CAKE',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'KUEMANGKOK',
            'nama_kategori' => 'Kue Mangkok',
            'slug' => 'kue-mangkok',
            'kd_kategori' => 'CAKE',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'KUEKERING',
            'nama_kategori' => 'Kue Kering',
            'slug' => 'kue-kering',
            'kd_kategori' => 'CAKE',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELSEMBAKO',
            'nama_kategori' => 'Parcel Sembako',
            'slug' => 'parcel-sembako',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELPERLENGKAPANBAYI',
            'nama_kategori' => 'Parcel Perlengkapan Bayi',
            'slug' => 'parcel-perlengkapan-bayi',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELKOMBINASI',
            'nama_kategori' => 'Parcel Kombinasi',
            'slug' => 'parcel-kombinasi',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELBUAH',
            'nama_kategori' => 'Parcel Buah',
            'slug' => 'parce-buah',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELWADAHPLASTIK',
            'nama_kategori' => 'Parcel Wadah Plastik',
            'slug' => 'parcel-wadah-plastik',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELPECAHBELAH',
            'nama_kategori' => 'Parcel Pecah Belah',
            'slug' => 'parcel-pecah-belah',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELELEKTRONIK',
            'nama_kategori' => 'Parcel Elekronik',
            'slug' => 'parcel-elektronik',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELMAKANANKESEHATAN',
            'nama_kategori' => 'Parcel Makanan Kesehatan',
            'slug' => 'papan-makanan-kesehatan',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'PARCELMAKEUP',
            'nama_kategori' => 'Parcel Make Up',
            'slug' => 'parcel-makeup',
            'kd_kategori' => 'PARCEL',
            'active' => '1'
        ]);
        // user
        DB::table('tbl_user') -> insert([
            'username' => 'admin',
            'tipe' => 'super-admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        DB::table('tbl_user') -> insert([
            'username' => 'ebunga-seller',
            'tipe' => 'seller',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        DB::table('tbl_user') -> insert([
            'username' => 'ebunga-buyer',
            'tipe' => 'buyer',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        DB::table('tbl_user') -> insert([
            'username' => 'addydr',
            'tipe' => 'buyer',
            'password' => password_hash('brian1903', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        // seller
        DB::table('tbl_member') -> insert([
            'username' => 'addydr',
            'full_name' => 'Addy Dr',
            'email' => 'addydr@ebunga.co.id',
            'phone' => '0812892223311',
            'country' => 'id',
            'provinsi' => '12',
            'kabupaten' => '1207',
            'kecamatan' => '120726',
            'kelurahan' => '1207262006',
            'alamat' => 'Medan tembung, jln. padang no. 12',
            'postal_code' => '-',
            'ktp' => '-',
            'npwp' => '-',
            'siup' => '-',
            'status' => '-',
            'upline' => 'owner',
            'complete_profile' => '1',
            'suspend' => 'n'
        ]);
        DB::table('tbl_member') -> insert([
            'username' => 'ebunga-seller',
            'full_name' => 'Ebunga Sukses Makmur Seller',
            'email' => 'admin@ebunga.co.id',
            'phone' => '082272177022',
            'country' => 'id',
            'provinsi' => '12',
            'kabupaten' => '1207',
            'kecamatan' => '120726',
            'kelurahan' => '1207262006',
            'alamat' => 'Medan tembung, jln. padang no. 12',
            'postal_code' => '-',
            'ktp' => '-',
            'npwp' => '-',
            'siup' => '-',
            'status' => '-',
            'upline' => 'addydr',
            'complete_profile' => '1',
            'suspend' => 'n'
        ]);
        DB::table('tbl_member') -> insert([
            'username' => 'ebunga-buyer',
            'full_name' => 'Ebunga Sukses Makmur Buyer',
            'email' => 'admin@ebunga.co.id',
            'phone' => '082272177021',
            'country' => 'id',
            'provinsi' => '12',
            'kabupaten' => '1207',
            'kecamatan' => '120726',
            'kelurahan' => '1207262006',
            'alamat' => 'Medan tembung, jln. padang no. 12',
            'postal_code' => '-',
            'ktp' => '-',
            'npwp' => '-',
            'siup' => '-',
            'status' => '-',
            'upline' => 'addydr',
            'complete_profile' => '1',
            'suspend' => 'n'
        ]);

        // country support
        DB::table('tbl_country_support') -> insert([
            'kd_country' => 'id',
            'name_country' => 'Indonesia',
            'status' => 'available',
            'active' => '1'
        ]);
        DB::table('tbl_country_support') -> insert([
            'kd_country' => 'my',
            'name_country' => 'Malaysia',
            'status' => 'available',
            'active' => '1'
        ]);
    }
}
