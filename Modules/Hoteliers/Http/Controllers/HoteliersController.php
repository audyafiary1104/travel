<?php

namespace Modules\Hoteliers\Http\Controllers;
use Modules\Hoteliers\Entities\Hoteliers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
class HoteliersController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */


    public function index()
    {
        $user = DB::table('transaksi')->
        join('type_room','transaksi.id_type_room','=','type_room.id')->
        join('product_hoteliers','type_room.id_hotels_product','=','product_hoteliers.id')->
        where('product_hoteliers.id_hoteliers',Session::get('id_hoteliers'))->orWhere('transaksi.status','paid')->get();   
        return view('hoteliers::transaksi',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('hoteliers::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $flight = new Hoteliers;

        $flight->name = $request->name;
        $flight->alamat = $request->alamat;
        $flight->email = $request->email;
        $flight->company = $request->company;
        $flight->phone_number = $request->phone_number;
        $flight->password = Hash::make($request->password);

        $flight->save();
        return redirect()->route('hoteliers.login')->with('alert','Sudah Register SIlakan Tunggu Konfirmasi Admin dan Cek email');

    }


    public function show($id)
    {
        return view('hoteliers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('hoteliers::edit');
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
    public function myHotels()
    {
        $hotels = DB::table('product_hoteliers')->get();
        if (count($hotels) <= 0) {
        $images = null;

    } else {
        foreach ($hotels as $key => $value) {
            $images[] = DB::table('image_hotels')->where('id_product', $hotels[$key]->id)->get();

            foreach ($images as $key => $value) {
                $images[$key+1] = $value;
               
            }
        }
    }
        return view('hoteliers::index', compact('hotels','images'));
    }
    public function room_type()
    {
        $hotels = DB::table('type_room')->get();
        if (count($hotels) <= 0) {
        $images = null;

    } else {
        foreach ($hotels as $key => $value) {
            $images[] = DB::table('image_type_room')->where('id_type_rooms', $hotels[$key]->id)->get();

            foreach ($images as $key => $value) {
                $images[$key+1] = $value;

            }
        }
    }
        return view('hoteliers::room_type',compact('hotels','images'));
    }
    public function login()
    {
        return view('hoteliers::login');
    }
    public function post_login(Request $request)
    {
        $hotelier = $request->hoteliers_code;
        $password = $request->password;
        $data = Hoteliers::where('hotelier_code',$hotelier)->first();
        if($data){
            if($password == $data->password){
                Session::put('id_hoteliers',$data->id_hoteliers);
                Session::put('hotelier_code',$data->hotelier_code);
                Session::put('login_hoteliers',TRUE);
                return redirect()->route('sales.transaksi');
            }
            else{
                return redirect()->route('hoteliers.login')->with('alert','Password atau Hoteliers Code, Salah !');
            }
        }
        else{
            return redirect()->route('hoteliers.login')->with('alert','Password atau Email, Salah!');
        }

    }

    public function register()
    {
        return view('hoteliers::register');
    }
    public function discount()
    {
        return view('hoteliers::discount');

    }
    public function add_hotel()
    {
        return view('hoteliers::add_hotel');
    }
    public function add_hotels_post(Request $request)
    {
            request()->validate([
            'uploadFile' => 'required',
        ]);
        if ($request->hasfile('uploadFile')) {
            foreach ($request->file('uploadFile') as $key => $value) {
                $imageName = time() . $key . '.png';
                $value->move(public_path('img/hotels_image/'), $imageName);
                $product_image[] = $imageName;
            }
        }

        $product_id = DB::table('product_hoteliers')->insertGetId([
            'nama_hotels' => $request->nama_hotel,
            'alamat_hotels' => $request->alamat_hotel,
            'jumlah_unit' => $request->jumlah_unit,
            'city' => $request->city,
            'country' => $request->country,
            'status_hotels' => $request->status,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'fax' => $request->fax,
            'email_reservation' => $request->email_reservation,
            'id_hoteliers' => '1',
        ]);
        foreach ($product_image as $key => $value) {
            DB::table('image_hotels')->insertGetId([
                 'image' => $value,
                 'id_product' => $product_id
             ]);
         }
        return response()->json(['success' => true]);

    }
    public function add_rooms()
    {
        $hotels = DB::table('product_hoteliers')->where('id_hoteliers',Session::get('id_hoteliers'))->get();
        return view('hoteliers::add_rooms',compact('hotels'));
    }
    public function add_rooms_post(Request $request)
    {
        if ($request->hasfile('uploadFile')) {
            foreach ($request->file('uploadFile') as $key => $value) {
                $imageName = time() . $key . '.png';
                $value->move(public_path('img/rooms_image/'), $imageName);
                $product_image[] = $imageName;
            }
            $rooms_id = DB::table('type_room')->insertGetId([
                'id_hotels_product' => $request->nama_hotels,
                'type_room' => $request->nama_rooms,
                'breakfest' => $request->breakfest,
                'status' => $request->status,
                'smoking' => $request->Smoking,
                'persons' => $request->Persons,
                'harga' => $request->price,
            ]);
         foreach ($product_image as $key => $value) {
                DB::table('image_type_room')->insertGetId([
                     'image' => $value,
                     'id_type_rooms' => $rooms_id
                 ]);
             }
        }
        return response()->json(['success' => true]);

    }
    public function dashboard()
    {
        return view('hoteliers::dashboard');
    }
    public function logout()
    {
        Session::flush();
        return view('hoteliers::login');
        
    }
}