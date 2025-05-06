<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    function upload(Request $request){
        // return "upload function called";
        $path = $request->file('file')->store('public');
        $fileNameArray = explode("/",$path);
        $fileName = $fileNameArray[1];
        return view('dispaly',['path'=>$fileName]);
        // return view('upload',['path'=>$fileName]);
    }

}
