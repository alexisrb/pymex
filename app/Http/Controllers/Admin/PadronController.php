<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadronController extends Controller
{
    public function index(){
        return view('admin.padrones.index');
    }
    public function create(){
        return view('admin.padrones.create');
    }
}
