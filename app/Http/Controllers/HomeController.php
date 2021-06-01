<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    // {
    //     //menerima data dari request get
    //     $nama = $request->name;
    //     // compact('nama') sama seperti array ['nama' => $nama]
    //     return view('home',compact('nama'));
    // }
    
    // cara lain yaitu tanpa class request yaitu menggunakan function
    public function __invoke()
    {
        //menerima data dari request get
        $nama = request('name');
        // compact('nama') sama seperti array ['nama' => $nama]
        return view('home',compact('nama'));
    }
}
