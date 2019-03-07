<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelkategori;

class CategoryController extends Controller
{
    public function index(){
        $hasil = modelkategori::all();
        return view('lihatdata',['liat'=>$hasil]);
   }
}
