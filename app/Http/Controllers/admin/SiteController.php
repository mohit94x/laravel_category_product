<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /* admin dashboard */
    public function index(){
        return view('admin.dashboard');
    }
}
