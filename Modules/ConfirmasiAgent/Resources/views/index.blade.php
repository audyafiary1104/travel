@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Confimasi Agent</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Company</th>
                                <th>Alamat</th>
                                <th>Alamat Email</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($agent as $agent)
                                <td>{{$agent->name}}</td>
                                <td>{{$agent->company}}</td>
                                <td>{{$agent->alamat}}</td>
                                <td>{{$agent->email}}</td>
                                <td><button onclick="window.location.href='/confirmasiagent/agent/{{$agent->id_agent}}'" class="btn btn-success">Konfimasi</button></td>
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