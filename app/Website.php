<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'key_words',
        'meta_description',
        'intro',
        'about_us',
        'about_ser',
        'logo_image',
        'status'
    ];




}
