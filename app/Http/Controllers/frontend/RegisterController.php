<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
   public function index()
   {
       return view('vendor.frontend.register');
   }
}
