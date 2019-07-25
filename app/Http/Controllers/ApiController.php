<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApiController extends Controller
{
   public function login(Request $request)
   {
     $admin =  DB::table('agent')->where('agent_code',$request->username)->first();
        if ($admin) {
            if ($admin->password == $request->password) {
                return response()->json([
                    'status' => 'Login Success',
                    'agent_code' => $request->username,
                    'id' => $admin->id_agent,
                    'alamat' => $admin->alamat,
                    'email' => $admin->email,
                    'company' => $admin->company,
                    'name' => $admin->name,
                    'balance' => $admin->balance,      
                ]);
            
        }else{
            return response()->json([
                'status' => null,
            ]);
            
        }
        
         }   
    }

    public function profile(Request $request)
    {
     $admin =  DB::table('agent')->where('id_agent',$request->id)->first();
     return response()->json($admin);
    }
    public function getprofile($id)
    {
     $admin =  DB::table('agent')->where('id_agent',$id)->first();
     return response()->json($admin);
    }
    public function getbalance($id)
    {
        $admin =  DB::table('agent')->where('id_agent',$id)->first();
        return response()->json($admin);
    }
    public function history($id)
    {
        $user = DB::table('transaksi')->join('type_room','transaksi.id_type_room','=','type_room.id')->
       join('product_hoteliers','type_room.id_hotels_product','=','product_hoteliers.id')->
        where('transaksi.id_agent',$id)->get();
        return $user;

    }
}