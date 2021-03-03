<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class BranchAdminCtr extends Controller
{
    public function approvebranchseller(Request $request)
    {
      $kdBranch = $request -> kdBranch;
      $waktu = now();
      DB::table('tbl_branch_seller') -> where('kd_branch', $kdBranch) -> update(['status_branch' => 'active', 'waktu_approve' => $waktu]);
      echo 'berhasil';
    }
}
