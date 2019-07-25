@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Master Hotelier</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Hotelier code</th>
                                <th>Comapany</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($hotel as $hotel)
                                <td>{{$hotel->name}}</td>
                                <td>{{$hotel->alamat}}</td>
                                <td>{{$hotel->email}}</td>
                                <td>{{$hotel->hotelier_code}}</td>
                                <td>{{$hotel->company}}</td>
                                <td><a href="/settings" class="icon-block">
                                        <i class="icon-cog icon-4x"></i>
                                        <span>delete</span>
                                    </a></td>
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