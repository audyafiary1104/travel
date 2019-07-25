@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Transaksi Hotels</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Agent Code</th>
                                            <th>Pajak</th>
                                            <th>Nama hotel</th>
                                            <th>Nama Guest</th>
                                            <th>check in </th>
                                            <th>check out</th>
                                            <th>Status</th>
                                            <th>Nomor Booking</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($transaksi as $transaksi)
                                            <td>{{$transaksi->agent_code}}</td>
                                            <td>{{$transaksi->tax}}</td>
                                            <td>{{$transaksi->nama_hotels}}</td>
                                            <td>{{$transaksi->title}} {{$transaksi->first_name}} {{$transaksi->last_name}}</td>
                                            <td>{{$transaksi->check_in}}</td>
                                            <td>{{$transaksi->check_out}}</td>
                                            <td>{{$transaksi->status}}</td>
                                            <td>{{$transaksi->nomor_booking}}</td>
                                            <td>{{$transaksi->price}}</td>
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
