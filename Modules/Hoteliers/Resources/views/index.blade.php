@extends('sales.master')

@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">My Hotel</strong>
                </div>
                <div class="card-header">
                <a href="{{route('sales.add_hotel')}}" class="icon-block">
                                        <i class="fa  fa-plus"></i>
                                        Add Hotel</a>                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Hotel</th>
                                <th>Alamat Hotel</th>
                                <th>Email Reservation</th>
                                <th>Jumlah Unit Disewakan</th>
                                <th>Status Hotels</th>
                                <th>Foto Hotel</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hotels as $key => $hotel)
                            <tr>
                                <td>{{$hotel->nama_hotels}}</td>
                                <td>{{$hotel->alamat_hotels}}</td>
                                <td>{{$hotel->email_reservation}}</td>
                                <td>{{$hotel->jumlah_unit}}</td>
                                <td>{{$hotel->status_hotels}}</td>
                                <td>
                                @foreach($images[$key + 1] as $key => $image)
                                <img src="{{ "/img/hotels_image/".$image->image }}" alt="" width="100">
                                @endforeach
                                </td>
                                <td>
                                    <a href="/admin" class="icon-block">
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
<script>
$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}

</script>
@stop
