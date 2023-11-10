<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class token_generateController extends Controller
{
    public function index()
    {
        return view('FrontEnd.token_generate');
    }
}
