<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
   public function index()
   {
    // $payload['user'] = "sintak";
    // $payload['kategori'] = "jurnal";

    return view('index');

    // menampilkan 1 data
    // return view('index', $payload);

    // menampilkan 2 data
    // return view('index', $payload, $jenis);
   }
   
}
