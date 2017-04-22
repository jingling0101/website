<?php

/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:57
 */
namespace App\Api\Transformers;


use App\Article;
use League\Fractal\TransformerAbstract;

class ArticlesTransformer extends TransformerAbstract
{

    public function transform(Article $item)
    {
        return [
            'key' => $item['key_words'],
            'desc' => $item['meta_description'],
            'title' => $item['title'],
        ];

    }

}