<?php

namespace App\Http\Controllers;

use App\Article;
use App\Website;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    protected $website;

    public function __construct()
    {
        $this->website = Website::find(1);
    }

    //
    public function index(){
        $website = $this->website;
        $articles = Article::all();
        return view('index',compact('website','articles'));
    }

        //
    public function showProducts(){
        $website = $this->website;
        return view('products',compact('website'));
    }

        //
    public function showNews(){
        $website = $this->website;
        $articles = Article::all();
        return view('news',compact('website','articles'));
    }
        //
    public function showNew($id){
        $article = Article::find($id);
        $website = $this->website;
        return view('new',compact('website','article'));
    }

        //
    public function showAbout(){
        $website = $this->website;
        return view('about',compact('website'));
    }



}
