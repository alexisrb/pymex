<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElectoralController extends Controller
{
    public function index(){
        return view('admin.electoral.index');
    }
    public function create(){
        return view('admin.electoral.create');
    }
}
