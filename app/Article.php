<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [
        'title'	,
        'cate_id',
        'slug',
        'key_words',
        'meta_description',
        'intro',
        'content_raw',
        'content_html',
        'page_image',
        'is_draft',
        'status'
    ];

    //
    static public function showAllTitles()
    {
        return Article::select('id', 'title')->get();
    }

    /**
     * 分页查询
     * @param $start //从第几条开始查询
     * @param $single //每页多少条数据
     * @return mixed
     */
    static public function showTitlesFromPage($start, $single)
    {
        return Article::select('id', 'title', 'cate_id', 'published_at')->where('status', 1)->offset($start)->limit($single)->get();
    }

    /**
     * @return mixed  总条数
     */
    static public function showTitlesTotal()
    {
        return Article::select('id', 'title', 'cate_id', 'published_at')->where('status', 1)->count();
    }

    static public function createArticleFromArr(array $data)
    {
        return Article::create($data);
    }


}
