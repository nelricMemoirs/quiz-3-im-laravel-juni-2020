<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('ui.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ui.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi_artikel' => 'required'
        ]);
        
        $article = new Article;
        $article->judul = $request->input('judul');
        $article->isi_artikel = $request->input('isi_artikel');
        $article->slug = Str::slug($request->input('judul'), '-');
        $article->tag = $request->input('tag');
        $article->save();

        return redirect('/artikel')->with('success', 'Article created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $judul =  Article::find($id);
        return \view('ui.show')->with('article', $judul);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul =  Article::find($id);
        return \view('ui.edit')->with('article', $judul);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi_artikel' => 'required'
        ]);
        
        $article = Article::find($id);
        $article->judul = $request->input('judul');
        $article->isi_artikel = $request->input('isi_artikel');
        $article->slug = Str::slug($request->input('judul'), '-');
        $article->tag = $request->input('tag');
        $article->save();

        return redirect('/artikel')->with('success', 'Article Upadted');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return \redirect('/artikel')->with('success', 'Article Deleted');
    }
}
