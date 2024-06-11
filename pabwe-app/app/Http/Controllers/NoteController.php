<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    public function getAddNote(){
        $data=[
            "auth" => Auth::user()
        ];
        return view("auth.app.notes.add", $data);
    }
    public function postAddNote(Request $request){

        $this->validate( $request, [
        'sertifikat' => 'required|image|mimes:.jpeg,png,jpg|max:1024',
        ]);

        $auth  = Auth::user();

        //Mengambil file yang sudah divalidasi daari request
        $photo = $request->file ('sertifikat');

        //Membuat nama unik untuk file yang sudah diunggah
        $filename=$auth->id . "_" . time() . '.' . $photo->getClientOriginalExtension ();

        //Menentukan direktori tempat penyimapanan file didalam direktori 'public'
        $directory = public_path('assets/img/notes/sertifikat');

        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        $sertifikat = "assets/img/notes/sertifikat" .  $filename;

        Note::create([
            "user_id" => $auth->id,
            "sertifikat" => $sertifikat,
        ]);


        return redirect()->route("home");

    }

}
