@extends("layouts.auth")

@section("content")
<div class="card-body">
    <h1>Ubah Catatan</h1>
    <hr/>

    <form action="{{route("post.login")}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control">
            @error("email")
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control">
            @error("password")
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3 text-end">
            <button class="btn btn-primary" type="submit">Masuk</button>
        </div>

</div>
@endsection
