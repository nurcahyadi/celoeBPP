<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check(Request $request)
    {
      if ($request->input('username') == "admin" && $request->input('password') == "admin") {
        return view('admin.homeadmin');
      } elseif ($request->input('username')== "ratih" && $request->input('password')=="ratih") {
        return view('dosen.homepagedosen');
      } else {
        return view('ph.homepageph');
      }
    }
}
