<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Author;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCateName() {
        $cateName = Category::all();
        return $cateName;
    }
}
