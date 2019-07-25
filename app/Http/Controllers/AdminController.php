<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminController extends Controller
{
    public function index()
    {   $untung = DB::table('transaksi')->sum('tax');
        $balance = DB::table('transaksi_balance')->sum(DB::raw('pajak + biaya_admin'));;
        $agent = count(DB::table('agent')->get());
        $hoteliers = count(DB::table('hoteliers')->get());
        $transaksi = count(DB::table('transaksi')->get());
        $keuntungan = $balance + $untung;
        return view('welcome',compact('keuntungan','transaksi','hoteliers','agent'));
        # code...
    }
   public function login()
   {
       return view('login');
   }
   public function post_login(Request $request)
   {
       $data = DB::table('admin')->where('username',$request->username)->first();
       if($data){
            Session::put('id_admin',$data->id_admin);
            Session::put('username',$data->username);
            Session::put('login_admin',TRUE);
            return redirect()->route('index.admin');
    }
    else{
        return redirect()->route('login_admin')->with('alert','Password atau Username, Tidak Ditemukan!');
    }  
   }
   public function logout()
   {
    Session::flush();
    return redirect()->route('login_admin')->with('alert','Kamu SUdah Logout');
    }
}
