<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    public function getAddNote(){
        $data=[
            "auth" => Auth::user()
        ];
        return view("app.notes.add", $data);
    }
    public function postNote(Request $request){

    }

}
