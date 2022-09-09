<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Category;
use App\Order;
use App\User;

use Mail;


class PageController extends Controller
{

    // API CHE RESTITUISCE GLI ELEMENTI PER L\'HOMEPAGE
    public function homepage(){
        $categories = Category::all();
        $users = User::all();
        return response()->json(compact('categories','users',));
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
                ->where('items.visible', '=', '1')
                ->distinct()->get();

        return response()->json(compact('items'));
    }

    // API CHE RESTITUISCE LE INFO DI UN RISTORANTE
    public function userInfo($slug){
        $user = User::where('slug',$slug)->get();
        return response()->json(compact('user'));
    }

    // API CHE RESTITUISCE LE INFO DI UN RISTORANTE
    public function saveOrder(Request $req){

        $new_order = new Order();
        $new_order->fill($req->customerInfo);

        // $new_order->name=$req->customerInfo['name'];
        // $new_order->surname=$req->customerInfo['surname'];
        // $new_order->address=$req->customerInfo['address'];
        // $new_order->email=$req->customerInfo['email'];
        // $new_order->telephone_number=$req->customerInfo['telephone_number'];
        // $new_order->total=$req->customerInfo['total'];

        $result = $new_order->save();

        foreach($req->cartInfo as $item){
            $new_order->items()->attach($item['id'], array('quantity' => $item['quantity']));
        }

        if($result)
        {
            return ["Result"=> "Data has been saved"];
        }else{
            return ["Result"=>"Operation failed"];
        }
    }
}
