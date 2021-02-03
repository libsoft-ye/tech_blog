<?php

namespace App\Helpers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

/**
 * Created by Abdulrahim.
 * Date: 03/02/2021, Time: 12:26 PM
 */
class MainHelper
{
    public static function getMainData()
    {
        /*
        $main_data_categories = Cache::remember('main_data_categories', 600, function () {
            return Category::root()->active()->with('children')->get();
        });
        */
        $latest_articles = Article::active()->with('category')->take(20)->latest()->get();
        $categories = Category::active()->with('children')->root()->orderBy('name')->get();
        $data = [
            'latest_articles'=> $latest_articles,
            'categories'=> $categories,
        ];
        return $data;
    }
}
