<?php

namespace App\Http\Controllers\Api\v1\Admin\Category;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getListCategories(Request $request) {
        return response()->apiRet(Category::getListCategories());
    }
}
