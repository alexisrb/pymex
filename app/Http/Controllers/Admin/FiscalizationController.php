<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiscalizationController extends Controller
{
    public function index(){
        return view('admin.fiscalizations.index');
    }
    public function create(){
        return view('admin.fiscalizations.create');
    }
}
