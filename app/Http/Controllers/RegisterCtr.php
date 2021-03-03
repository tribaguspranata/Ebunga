<?php
/**
* Import namespace & lib
*/
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
/*
* Import app
*/
use App\Models\RegistrasiUserMdl;
use App\Models\KategoriMdl;
use App\Mail\RegistrasiMail;

class RegisterCtr extends Controller
{
    public function registerpage()
    {
      $kategori = KategoriMdl::all();
      $dr = ['kategori' => $kategori, 'page' => 'home'];
        return view('futala_register.registerpage', $dr);
    }

    public function registerwithreferral($referral_id)
    {
        $cssFile = 'style-about.css';
        $jsFile = 'ebunga-register.js';
        $page = 'Register';
        $dr = ['referralStatus' => 'yes', 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'page' => $page, 'idReferral' => $referral_id];
        return view('register.register', $dr);
    }

    public function registerproses(Request $request)
    {
        // 'email':email, 'password':password, 'fullname':fullname,'phoneNumber':phoneNumber
        $email = $request -> email;
        $password = $request -> password;
        $full_name = $request -> fullname;
        $phone_number = $request -> phoneNumber;
        $referral_code = $request -> referralCode;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $kd_registrasi = Str::random(20);
        $token_registrasi = Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5));

        // cek jumlah email
        $jlhEmail = DB::table('tbl_user') -> where('username', $email) -> count();
        if($jlhEmail == 1){
          $sr = ['status' => 'email_exist'];
          return \Response::json($sr);
        }else{
          DB::table('tbl_registrasi_user') -> insert([
              'kd_registrasi' => $kd_registrasi,
              'token_registrasi' => $token_registrasi,
              'full_name' => $full_name,
              'phone_number' => $phone_number,
              'email' => $email,
              'password' => $password_hash,
              'referral_code' => $referral_code,
              'status_aktivasi' => 'pending'
          ]);
          $kdTimeline = Str::random(50);
          $caption = "User dengan email ".$email." telah melakukan registrasi";
          $waktu = Carbon::now();
          DB::table('tbl_timeline') -> insert([
              'kd_timeline' => $kdTimeline,
              'event' => 'registrasi_user',
              'kd_subject' => $kd_registrasi,
              'title' => 'Registrasi user baru',
              'caption' => $caption,
              'object' => $email,
              'waktu' => $waktu
          ]);
          $tokenTransaksi = Str::random(40);
          DB::table('tbl_ecash') -> insert([
            'token_transaction' => $tokenTransaksi,
            'user' => $email,
            'old_ecash' => '0',
            'flow' => 'add',
            'total' => '5000',
            'new_balance' => '5000',
            'waktu' => $waktu
          ]);
          $dr = ['email' => $email, 'token_aktivasi' => $token_registrasi];
          $sr = ['status' => 'sukses'];
          Mail::to($email) -> send(new RegistrasiMail($dr));
          return \Response::json($sr);
        }
    }

    public function aktivasiakun($kodeaktivasi)
    {
        $cekJumlahKode = RegistrasiUserMdl::where('token_registrasi', $kodeaktivasi) -> where('status_aktivasi', 'pending') -> count();
        $now = now();
        if($cekJumlahKode < 1){
            echo "<pre>Activation code failed</pre>";
        }else{
            $dr = RegistrasiUserMdl::where('token_registrasi', $kodeaktivasi) -> first();
            // update status aktivasi & waktu aktivasi
            DB::table('tbl_registrasi_user') -> where('token_registrasi', $kodeaktivasi) -> update(['status_aktivasi' => 'done', 'waktu_aktivasi' => $now]);
            // create user
            DB::table('tbl_user') -> insert([
                'username' => $dr -> email,
                'tipe' => 'buyer',
                'password' => $dr -> password,
                'active' => '1'
            ]);
            // create customer data
            DB::table('tbl_member') -> insert([
                'username' => $dr -> email,
                'full_name' => $dr -> full_name,
                'email' => $dr -> email,
                'country' => 'id',
                'provinsi' => '-',
                'kabupaten' => '-',
                'kecamatan' => '-',
                'kelurahan' => '-',
                'postal_code' => '-',
                'phone' => $dr -> phone_number,
                'alamat' => '-',
                'ktp' => '-',
                'npwp' => '-',
                'siup' => '-',
                'status' => '-',
                'upline' => 'addydr',
                'complete_profile' => '0',
                'suspend' => 'n'
            ]);
            $cssFile = 'style-about.css';
            $jsFile = 'ebunga-aktivasi-akun.js';
            $dr = ['page' => 'Success activation', 'cssFile' => $cssFile, 'jsFile' => $jsFile];
            return view('register.aktivasi_akun', $dr);
        }

    }

}
