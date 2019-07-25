@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Transaski</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Agent Code</th>
                                            <th>Jumlah Balance</th>    
                                            <th>Bukti pembayaran</th>                                            
                                            <th>Biaya Admin</th>                                            
                                            <th>Pajak</th>                                            
                                            <th>Harga</th>      
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($balance as $balance)
                                        <tr>
                                            <td>{{$balance->name}}</td>
                                            <td>{{$balance->jumlah_balance}}</td>
                                            <td><img src="{{ "/img/bukti_tf/".$balance->bukti_tf }}" alt="" width="100"></td>
                                            <td>{{$balance->biaya_admin}}</td>
                                            <td>{{$balance->pajak}}</td>
                                            <td>{{$balance->jumlah_ditf}} </td>
                                            <td><button type="button" onclick="window.location.href='{{ route('master_transaksi.payment_confim', [$balance->id, $balance->jumlah_balance]) }}' "class="btn btn-success">Konfimasi</button>
</td>
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
