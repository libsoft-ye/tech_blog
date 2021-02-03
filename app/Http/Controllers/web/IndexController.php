<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helpers\MainHelper as MHelper;

class IndexController extends Controller
{
    public function index(Request $request){
        $main_data = MHelper::getMainData();
        return view('web.index', compact('main_data'));
    }
}
