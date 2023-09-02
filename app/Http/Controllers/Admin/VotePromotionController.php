<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotePromotionController extends Controller
{
    public function index(){
        return view('admin.vote-promotion.index');
    }
    public function create(){
        return view('admin.vote-promotion.create');
    }
}
