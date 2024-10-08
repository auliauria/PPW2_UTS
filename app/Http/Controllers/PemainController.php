<?php

namespace App\Http\Controllers;

use App\Models\ModelPemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index (){
        $data_pemain = ModelPemain::all();

        return view('pemain', compact('data_pemain'));
    }
}
