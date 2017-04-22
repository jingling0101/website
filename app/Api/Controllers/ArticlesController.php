<?php
/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-24
 * Time: 下午10:24
 */

namespace App\Api\Controllers;


use App\Api\Transformers\ArticlesPageTransformer;
use App\Api\Transformers\ArticlesTransformer;
use App\Article;
//use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticlesController extends BaseController
{
    //从第几条开始查询
    protected $start = 0;
    //每页多少条数据
    protected $single = 5;

    public function all()
    {
        $articles = Article::all();
        return $articles;
    }

    public function allTitles(Request $request)
    {
        //从第几条开始查询
        $start = $request->get('start',$this->start);
        //每页多少条数据
        $single = $request->get('single',$this->single);
        $item = [];
        $item['total'] = Article::showTitlesTotal();
        $item['articles'] = Article::showTitlesFromPage($start,$single);
        $data = ArticlesPageTransformer::transform($item);
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }


    public function index()
    {
        $articles = Article::all();
        return $this->collection($articles, new ArticlesTransformer());
    }


    public function show($id)
    {
        $article = Article::find($id);
        if(!$article){
            return $this->response->errorNotFound(404);
        }
        return $this->item($article, new ArticlesTransformer());
    }

    public function store(Request $request)
    {
        $re = $request->all();
        Log::info(print_r($re,true));

        $data = [];
        $data['title'] = $request->get('title');
        $data['cate_id'] = intval($request->get('cate',1));
        $data['slug'] = $request->get('slug',rand(0,100));
        $data['key_words'] = $request->get('keywords');
        $data['meta_description'] = $request->get('desc');
        $data['content_raw'] = $request->get('raw',' ...');
        $data['content_html'] = $request->get('content',' ');
        $data['intro'] = substr($data['content_html'],0,60);
        Log::info(print_r($data,true));

        $rs = Article::createArticleFromArr($data);

//        $article = new Article();
//        $article->cate_id = $request->get('cate',1);
//        $article->slug = $request->get('slug','12');
//        $article->key_words = $request->get('keywords');
//        $article->meta_description = $request->get('desc');
//        $article->content_html = $request->get('content',' ');
//        $article->intro = substr($article->content_html,0,60);
//        $article->title = $request->get('title');
//        $article->subtitle = '222222222';
//        $rs = $article->save();
        if($rs){
            Log::info('created article '.$rs);
        } else {
            Log::debug($rs);
        }
        return 1;
    }

    public function update(Request $request)
    {
        $id = $request->get('id');

        $article = Article::find($id);
        if(!$article){
            return $this->response->errorNotFound(404);
        }

        $article->cate_id = $request->get('cate',1);
        $article->slug = $request->get('slug','12');
        $article->key_words = $request->get('keywords');
        $article->meta_description = $request->get('desc');
        $article->content_html = $request->get('content',' ');
        $article->intro = substr($article->content_html,0,60);
        $article->title = $request->get('title');
        $article->subtitle = '222222222';
        $rs = $article->save();
        if($rs){
            Log::info('created article '.$rs);
        } else {
            Log::debug($rs);
        }
        return json_encode($article);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if(!$article){
            return $this->response->errorNotFound(404);
        }

    }



}