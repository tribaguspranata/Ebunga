<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingCtr extends Controller
{
    public function viewemailregistrasi()
    {
        $dr =   ['email' => 'tes@gmail.com', 'website' => 'ebunga.co.id', 'token_aktivasi' => '12'];
        return view('layout_email.mail_registrasi_view', $dr);
    }

    

}
