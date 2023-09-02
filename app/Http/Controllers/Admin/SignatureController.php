<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index(){
        return view('admin.signatures.index');
    }
    public function create(){
        return view('admin.signatures.create');
    }
}
