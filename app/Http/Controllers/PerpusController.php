<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PerpusController extends Controller
{
    public function index(): View
   {
    return view("perpustakaan.index");
   }
}
