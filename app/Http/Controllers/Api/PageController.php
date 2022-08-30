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
        // $current_user = auth()->user()->id;
        // $menu = Item::select('*')->where('user_id','=', $current_user )->with('user')->with('course')->paginate(5);
        $menu = Item::with('user')->with('course')->get();
        // dd($categories, $menu);
        return response()->json(compact('categories', 'menu'));

    }
}
