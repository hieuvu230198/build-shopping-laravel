<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getListCategories() {
        return Category::orderByDesc('created_at')->paginate(config('constants.number_paginate'));
    }
}
