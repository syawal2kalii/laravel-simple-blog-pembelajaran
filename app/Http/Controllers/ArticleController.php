<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Data dummy
//       nsdddddd   q3  $article = [
//            'judul' => 'indonesia darurat corona',
//            'content' => 'lorem ipsum ',
//        ];

//      Data dari database
        $articles = Article::all();
        return view('article.articles',compact('articles'));

//        ex1
//        return view('article')->with(['judul' => 'indonesia darurat corona','content' => 'lorem ipsum ']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * =
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('article.article-create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'cat_id'=> $request->category,
            'content'=> $request->contentt,
            'slug' => \Str::slug($request->title).'-'.\Str::random(10),
            'user_id' => 1 //sementara
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $category = Category::all();
        return view('article.article-edit',compact('article','category'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Article::where('slug',$slug)->delete();
        return redirect('/articles');
    }

    public function getArticleById($id){
        return "article dengan id ".$id;
    }

    public function detail(Article $article){
        return view('article.article-detail',compact('article'));
    }
}
