@extends('sales.master')

@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">My Rooms</strong>
                </div>
                <div class="card-header">
                <a href="{{route('sales.add_rooms')}}" class="icon-block">
                                        <i class="fa  fa-plus"></i>
                                        Add Rooms</a>  
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Nama Hotel</th>
                                <th>Persons</th>
                                <th>Status</th>
                                <th>Breakfest</th>
                                <th>Price</th>
                                <th>images</th>

                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hotels as $key => $hotels)
                            <tr>
                                <td>{{$hotels->type_room}}</td>
                                <td>Shyahid grand city</td>
                                <td>{{$hotels->persons}}</td>
                                <td>{{$hotels->status}}</td>
                                <td>{{$hotels->breakfest}}</td>
                                <td>${{$hotels->harga}}</td>
                                <td>
                                @foreach($images[$key + 1] as $image)
                                <img src="{{ "/img/rooms_image/".$image->image }}" alt="" width="100">
                                @endforeach
                                </td>

                                <td><a href="/admin" class="icon-block">
                                        <i class="fa  fa-pencil"></i>
                                    </a>
                                    <a href="/admin" class="icon-block">
                                        <i class="fa  fa-trash"></i>
                                    </a>
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