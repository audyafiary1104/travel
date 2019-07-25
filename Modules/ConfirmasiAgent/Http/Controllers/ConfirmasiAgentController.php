<?php

namespace Modules\ConfirmasiAgent\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Mail;  
class ConfirmasiAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $agent = DB::table('agent')->where('actived',false)->get();
        return view('confirmasiagent::index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('confirmasiagent::create');
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
        return view('confirmasiagent::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('confirmasiagent::edit');
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

    }
    public function payment()
    { $balance = DB::table('transaksi_balance')->
        join('agent','transaksi_balance.id_agent','=','agent.id_agent')->where('confirmasi',FALSE)->get();
        return view('confirmasiagent::payment',compact('balance'));
    }
    public function payment_confirm($id,$balance)
    {
        DB::table('transaksi_balance')->
        join('agent','transaksi_balance.id_agent','=','agent.id_agent')
        ->where('transaksi_balance.id',$id)->update([
            'confirmasi' => true,
            'balance' => $balance
        ]);
        return redirect()->back();
    }
    public function hotelier()
    {   $hoteliers = DB::table('hoteliers')->where('actived',false)->get();
        return view('confirmasiagent::hotelier',compact('hoteliers'));
    }
    public function confimasi_hoteliers($id)
    {
        $get = DB::table('hoteliers')->where('id_hoteliers',$id)->first();        
        $a = rand(1000,10000);
        $b = Str::substr($get->email, 0, 3).$a;

        $hoteliers = DB::table('hoteliers')->where('id_hoteliers',$id)->update(
            [
                'actived' => true,
                'hotelier_code' => 'HTL'.$a,
                'password' =>  $b

            ]
        );
        $data = array('name'=> $get->name ,'hotelier_code'=> $get->hotelier_code,
        'password' =>  $b );
        Mail::send('confirmasiagent::hotel_mail', $data, function($message) use ($get) {
        $message->to($get->email, 'Travel Agent')->subject('This is Your hotel code');
         $message->from('pt_travel_travelan@travel.com','Admin Travel Pantek');
     });
        return redirect()->back();
    }
    public function konfirmasi_agent($id)
    {
        $get = DB::table('agent')->where('id_agent',$id)->first();
        $a = rand(1000,10000);
        $b = Str::substr($get->email, 0, 3).$a;
        $agent = DB::table('agent')->where('id_agent',$id)->update([
            'actived' => true,
            'agent_code' =>  $b,
            'password' =>  $b
        ]);       
        $data = array('name'=> $get->name ,'agent_code'=> $get->agent_code,
        'password' =>  $b );
        Mail::send('confirmasiagent::mail', $data, function($message) use ($get) {
        $message->to($get->email, 'Travel Agent')->subject('This is Your Agent code');
         $message->from('pt_travel_travelan@travel.com','Admin Travel Pantek');
     });
        return redirect()->back();
    }
    public function transaksi()
    { 
       $user =  DB::table('transaksi')->where('status','processing')->get();
        return view('confirmasiagent::transaksi',compact('user'));
    }
    public function transaksi_post($id)
    {
       DB::table('transaksi')->where('id',$id)->update([
            'status' => 'paid'
       ]);
       return redirect()->back();
    }
}
