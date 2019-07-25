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
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>agent code</th>
                                            <th>Balance</th>
                                            <th>Comapany</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($agent as $agent)
                                        <tr>
                                            <td>{{$agent->name}}</td>
                                            <td>{{$agent->alamat}}</td>
                                            <td>{{$agent->email}}</td>
                                            <td>{{$agent->agent_code}}</td>
                                            <td>{{$agent->balance}}</td>
                                            <td>{{$agent->company}}</td>
                                            <td>Edit</td>
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
