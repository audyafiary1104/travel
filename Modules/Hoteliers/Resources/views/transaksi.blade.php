@extends('sales.master')

@section('content')

<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">My Hotel</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Guest</th>
                                            <th>Booking Code</th>
                                            <th>Nama Hotels</th>
                                            <th>Type kamar</th>
                                            <th>Chek in </th> 
                                            <th>Chek out </th> 
                                            <th>status pembayaran</th> 
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $user)
                                        <tr>
                                            <td>{{$user->title}} {{$user->first_name}} {{$user->last_name}}</td>
                                            <td>{{$user->nomor_booking}}</td>
                                            <td>{{$user->nama_hotels}}</td>
                                            <td>{{$user->type_room}}</td>
                                            <td>{{$user->check_in}}</td>
                                            <td>{{$user->check_out}}</td>
                                            <td>{{$user->status}}</td>
                                            <td>view details</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
