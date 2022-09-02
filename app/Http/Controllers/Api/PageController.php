<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Course;
use App\User;

class PageController extends Controller
{
    public function index(){

        $categories = Category::all();
        $courses = Course::all();
        $users = User::all();
        $menu = Item::with('user')->with('course')->get();

        return response()->json(compact('categories', 'courses', 'users', 'menu'));

    }

    public function filtered(){
        $courses = Course::where();
        return response()->json(compact());
    }
}
