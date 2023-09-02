<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JuridicoController extends Controller
{
    public function index(){
        return view('admin.juridico.index');
    }
    public function create(){
        return view('admin.juridico.create');
    }
}
