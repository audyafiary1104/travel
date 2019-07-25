@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Agent</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Company</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hoteliers as $hotel)
                                        <tr>
                                            <td>{{$hotel->name}}</td>
                                            <td>{{$hotel->company}}</td>
                                            <td>{{$hotel->alamat}}</td>
                                            <td>{{$hotel->email}}</td>
                                            <td><button onclick="window.location.href='/confirmasiagent/hotelier/{{$hotel->id_hoteliers}}'" class="btn btn-success">Konfimasi</button>
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
