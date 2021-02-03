<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $categoriesCount=Category::active()->count();
        $articlesCount=Article::active()->count();
        $usersCount=User::count();
        $visitorsCount=0;
        //dd($categoriesCount);
        $statistics = [
            'categories' => $categoriesCount,
            'articles' => $articlesCount,
            'users' => $usersCount,
            'visitors' => $visitorsCount,
        ];
        return view('admin.dashboard', compact('statistics'));
    }
}
