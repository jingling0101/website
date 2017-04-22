<?php

/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:57
 */
namespace App\Api\Transformers;


use App\Article;
use Illuminate\Support\Facades\Log;
use League\Fractal\TransformerAbstract;

class ArticlesPageTransformer extends TransformerAbstract
{

    static public function transform(array $item)
    {
        $data = [
            'total' => $item['total'],
            'articles' => $item['articles'],
        ];
        return $data;
    }

}