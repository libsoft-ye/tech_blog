<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles= Article::with('category')->orderBy('id','desc')->get();
        return view('admin.articles.index')->with('articles',$articles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id','name')->where('is_active',1)->get();
        return view('admin.articles.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$article =new Article();
        $article->name=$request->name;
        $article->content=$request->content ?? '';
        $article->cat_id=$request->cat_id ?? 0;
        $article->is_active=$request->has('is_active')?1:0;
        $article->save();
        return redirect()->route('admin.articles.index')->with('message', 'added successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  Artilce $article
     * @return \Illuminate\Http\Response
     */
    public function show(Artilce $article)
    {
        return view('admin.articles.show')->with('article',$article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Artilce $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Artilce $article)
    {
        return view('admin.articles.edit')->with('article',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Artilce $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artilce $article)
    {
        $article->name=$request->name;
        $article->content=$request->content ?? '';
        $article->cat_id=$request->cat_id ?? 0;
        $article->is_active=$request->has('is_active')?1:0;
        $article->save();
        return redirect()->route('admin.articles.index')->with('message', 'updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Artilce $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artilce $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('message', 'deleted successful');
    }
}
