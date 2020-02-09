<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /* 
    | Method untuk memanggil view
    | Pada method about sekaligus mengirimkan variabel $nama
    */
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $nama = 'Kai';
        return view('about', ['nama' => $nama]);
    }
}
