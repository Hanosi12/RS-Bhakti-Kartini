<?php

namespace App\Http\Controllers\Action;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
}
