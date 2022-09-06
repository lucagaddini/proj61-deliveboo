<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Category;
use App\Item;
use App\Course;
use App\User;

class PageController extends Controller
{

    // API CHE RESTITUISCE GLI ELEMENTI PER L\'HOMEPAGE
    public function homepage(){
        $categories = Category::all();
        $users = User::all();
        return response()->json(compact('categories','users',));
    }

    // $catIdOne,$catIdTwo,$catIdThree
    // API PER L'ADVACED SEARCHING
    public function advHomeSearch($catIdOne,$catIdTwo){

        $advSrc = DB::table('users')
                ->select('users.name')
                ->join('category_user','user_id', '=', 'users.id')
                ->join('categories', 'categories.id', "=", 'category_user.category_id')
                ->whereIn('categories.id', [$catIdOne, $catIdTwo])

                // ->where('categories.id', '=', $catIdOne)
                // ->orWhere('categories.id', '=', $catIdTwo)

                // ->when($catIdTwo == 'null',function($advSrc, $catIdOne){
                //     return $advSrc->where('categories.id', '=', $catIdOne); //è uguale a null
                // },function($advSrc, $catIdTwo){
                //     return $advSrc->where('categories.id', $catIdTwo); //non è uguale a null
                // })

                ->distinct()
                ->get();

        return response()->json(compact('advSrc'));
    }




    // API CHE RESTITUISCE LE PORTATE DI UN DETERMIANTO RISTORANTE
    public function coursesUser($slug){
        $courses = DB::table('courses')
                ->select('courses.id','courses.name')
                ->join('items','items.course_id','=','courses.id')
                ->join('users','users.id','=','items.user_id')
                ->where('users.slug','=', $slug)
                ->distinct()->get();

        return response()->json(compact('courses'));
    }

    // API CHE RESTITUISCE LE CATEGORIE DI UN DETERMIANTO RISTORANTE
    public function categoryUser($slug){
        $categories = DB::table('categories')
                ->select('categories.id','categories.name')
                ->join('category_user','category_id','=','categories.id')
                ->join('users','users.id','=','category_user.user_id')
                ->where('users.slug','=', $slug)
                ->distinct()->get();

        return response()->json(compact('categories'));
    }

    // API CHE RESTITUISCE LE PORTATE DI UN DETERMIANTO RISTORANTE
    public function itemsUser($slug,$courseId){

        $items = DB::table('items')
                ->select('items.*')
                ->join('users','users.id','=','items.user_id')
                ->where('users.slug','=', $slug)
                ->where('items.course_id','=', $courseId)
                ->distinct()->get();

        return response()->json(compact('items'));
    }

    // API CHE RESTITUISCE LE INFO DI UN RISTORANTE
    public function userInfo($slug){

        $user = User::where('slug',$slug)->get();

        return response()->json(compact('user'));
    }


}
