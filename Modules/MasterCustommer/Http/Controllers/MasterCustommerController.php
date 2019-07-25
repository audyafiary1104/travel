<?php

namespace Modules\MasterCustommer\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MasterCustommerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $agent = DB::table('agent')->where('actived',TRUE)->get();
        return view('mastercustommer::index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('mastercustommer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('mastercustommer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('mastercustommer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function hotelier()
    {
        $hotel = DB::table('hoteliers')->where('actived',TRUE)->get();
        return view('mastercustommer::hotelier',compact('hotel'));
    }
    public function transaksi()
    {
        $transaksi = DB::table('transaksi')->
        join('type_room','transaksi.id_type_room','=','type_room.id')->
        join('product_hoteliers','type_room.id_hotels_product','=','product_hoteliers.id')->
        join('agent','agent.id_agent','=','transaksi.id_agent')->
        where('transaksi.status','paid')->get();
       return view('mastercustommer::transaksi',compact('transaksi'));
    }
    public function transaksi_balance()
    {
        $balance = DB::table('transaksi_balance')->
        join('agent','transaksi_balance.id_agent','=','agent.id_agent')->where('confirmasi',TRUE)->get(); 
    
        return view('mastercustommer::balance',compact('balance'));
    
    }
}
