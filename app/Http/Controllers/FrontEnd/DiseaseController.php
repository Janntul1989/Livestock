<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        return view('FrontEnd.Disease');
    }
}
