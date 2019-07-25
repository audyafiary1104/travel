<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {   $bank = DB::table('bank')->get();
        return view('setting::index',compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    
    public function add_bank(Request $request)
    {
        DB::table('bank')->insert([
            'bank_name' => $request->bank_name,
            'routing_no' => $request->routing_no,
            'account_name' => $request->accont_name,
            'account_no' => $request->account_no,
            'type' => $request->type
        ]);
        return redirect()->back();
    }
}
