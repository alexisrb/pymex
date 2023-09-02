<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Campaign_StrategiesController extends Controller
{
    public function index(){
        return view('admin.campaign-strategies.index');
    }
    public function create(){
        return view('admin.campaign-strategies.create');
    }
}
