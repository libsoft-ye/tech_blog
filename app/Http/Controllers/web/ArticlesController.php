<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helpers\MainHelper as MHelper;

class ArticlesController extends Controller
{
    public function index(Request $request){
        $main_data = MHelper::getMainData();
        $articles = Article::active()->when($request->category, function ($q) use ($request) {
            return $q->where('category_id', $request->category);
        })->get();
        return view('web.articles.index', compact('main_data', 'articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $main_data = MHelper::getMainData();
        return view('web.articles.show', compact('main_data', 'article'));
    }
}
