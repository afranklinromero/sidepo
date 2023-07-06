<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth.admin');
        $this ->name('admin.index');
       
    }
    public function index(){

        return view('welcome');
    }
}
