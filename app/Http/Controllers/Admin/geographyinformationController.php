<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class geographyinformationController extends Controller
{
    public function index(){
        return view('admin.geographys.index');
    }
    public function create(){
        return view('admin.geographys.create');
    }
}
