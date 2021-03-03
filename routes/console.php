<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Maulana20\GojekID;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('ebunga_table_clear', function(){
    $tableName = $this -> ask("Masukkan nama table : ");
    DB::table($tableName) -> delete();
    echo "\n";
    echo $tableName." berhasil di clear";
});

Artisan::command('ebunga_test_upload', function(){
    $dr = ['status' => 'success'];
    echo \Response::json($dr);
});

Artisan::command('gojek_start_apps', function(){
    $gojek = new GojekID();
    echo "Welcome to CLI - By Aditia Darma Nst";
    echo "\n";
    echo "=====================================";
    $phone = $this -> ask ("Masukkan nomor handphone : ");
    echo "sending otp ...";
    $authLogin = $gojek -> loginPhone($phone) -> getLoginToken();
    echo "Your auth login is : " . $authLogin;
    echo "===================================";
    $otp = $this -> ask("Masukkan OTP : ");
    $authToken = $gojek -> loginAuth($authLogin, $otp) -> getAuthToken();
    echo $authToken;
});

