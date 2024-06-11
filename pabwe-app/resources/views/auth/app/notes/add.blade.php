@extends("layouts.auth")

@section("content")
<div class="card-body">
    <h1>Ubah Gambar</h1>
    <hr/>

    <form action="{{route("post.note.add")}}" method="POST" entype="multipart/form-data">
        @csrf

        <div class ="mb-3">
            <label class="form-label" for="input">Upload</label>
            <input type="file" name="sertifikat" class="form-control" id="input">
            @error("sertifikat")
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       <!-- <div class="mb-3">
            <label for="inputCatatan" class="form-label">Modifikasi Sertifikat</label>
            <input type="text" name="email" id="inputCatatan" class="form-control">
            @error("catatan")
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>-->
        <div class="mb-3 text-end">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>

</div>
@endsection
