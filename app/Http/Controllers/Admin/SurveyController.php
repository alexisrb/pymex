<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(){
        return view('admin.surveys.index');
    }
    public function create(){
        return view('admin.surveys.create');
    }
}
