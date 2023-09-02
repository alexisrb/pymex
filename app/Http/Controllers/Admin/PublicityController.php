<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicityController extends Controller
{
    public function index(){
        return view('admin.publicity.index');
    }
    public function create(){
        return view('admin.publicity.create');
    }
}
