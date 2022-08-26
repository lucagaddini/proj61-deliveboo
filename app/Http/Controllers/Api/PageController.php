<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class PageController extends Controller
{
    public function index(){

        $categories = Category::all();
        return response()->json(compact('categories'));

    }
}
