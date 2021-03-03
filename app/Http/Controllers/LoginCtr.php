<?php
/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
/**
 * Import app
 */
use App\Models\UserMdl;

class LoginCtr extends Controller
{
    public function loginpage()
    {
        $userLogin = session('userLogin');
        if($userLogin === null){
             /**
             * Create data for header & footer layout
             */
            $jsFile         = 'ebunga-login.js';
            $page           = 'Login';
            /**
             * Create variable to response data
             */
            $dr = ['jsFile' => $jsFile, 'page' => $page];
            /**
             * Render to view
             */
            return view('login.login', $dr);
        }else{
            return redirect('/account');
        }

    }

    public function loginproses(Request $request)
    {
        /**
         * Get data from POST
         * if development mode go add this route -> controller to CSRF whitelist
         */
        $username = $request -> username;
        $password = $request -> password;
        /**
         * Check total user
         */
        $jlhUsername = UserMdl::where('username', $username) -> count();
        /**
         * Check & give result if user total < 1
         */
        if($jlhUsername < 1){
            $dr = ['status' => 'noUsername'];
        }else{
            /**
             * Get password from database with model
             */
            $dataUser = UserMdl::where('username', $username) -> first();
            $passwordUserDb = $dataUser -> password;
            /**
             * Get password verify with native php
             */
            $cekPassword = password_verify($password, $passwordUserDb);
            /**
             * Check if password true or false
             */
            if($cekPassword == true){
                /**
                 * if true, create session & status success of respond
                 */
                session(['userLogin' => $username]);
                $dr = ['status' => 'success'];
            }else{
                /**
                 * if false, create status error of respond
                 */
                $dr = ['status' => 'wrongPassword'];
            }
        }
        /**
         * Return respon json to client
         */
        return \Response::json($dr);
    }
}
