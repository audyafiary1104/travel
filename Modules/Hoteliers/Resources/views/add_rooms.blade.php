@extends('sales.master')
@section('content')
<form action="{{route('sales.add_rooms.post')}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Rooms</label>
            <input type="text" name="nama_rooms" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Nama Hotels</label>
            <select id="inputState" name="nama_hotels" class="form-control">
            @if(count($hotels)<=0)
            <option value="">Silakan Input Hotels</option>

            @else
            @foreach($hotels as $hotels)
                <option value="{{$hotels->id}}">{{$hotels->nama_hotels}}</option>
                @endforeach
             @endif   
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Persons</label>
        <input type="number" name="Persons" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Smoking</label>
            <select id="inputState" name="Smoking" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">Price Per Night</label>
            <input type="number" name="price" class="form-control" id="inputCity">
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip">Breakfest</label>
            <select id="inputState" name="breakfest" class="form-control">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Status</label>
            <select id="inputState" name="status" class="form-control">
                <option value="non_refundable">Non Refundalble</option>
                <option value="cancellation">cancellation</option>
            </select> </div>
    </div><br /><br />
    <div class="form-group">
        <label for="desc">Photos :</label>
        <div id="image-view" class="image_preview">
            <div class="add" onclick="document.getElementById('uploadFile').click();"><i class="fa fa-plus fa-5x"
                    aria-hidden="true"></i></div>
        </div>
        <br>
        <input type="file" id="uploadFile" style="display:none;" multiple accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
<script>
    $(function () {
        var photo = [];
        $("#uploadFile").change(function () {
            var total_file = document.getElementById("uploadFile").files.length;
            for (var i = 0; i < total_file; i++) {
                $('.add').before("<img src='" + URL.createObjectURL(event.target.files[i]) +
                    "'width='200' height='100'>");
                photo.push(document.getElementById("uploadFile").files[i])
            }
        });
        $("form").submit(function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0])
            for (var i = 0; i < photo.length; i++) {
                formData.append('uploadFile[]', photo[i])
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                data: formData,
                async: false,
                cache: false,
                processData: false,
                contentType: false,
                url: "{{ route('sales.add_rooms.post') }}",
                type: "POST",
                dataType: 'json',
                success: function (result) {
                    if (result.success) {
                        window.location.replace("/hoteliers/room_type");
                    }
                }
            })
        });
    });
</script>
@stop