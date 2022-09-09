<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Order;

class OrderController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = auth()->user()->id;

        $orders = DB::table('orders')
            ->select('orders.id',
                    'orders.updated_at',
                    'orders.created_at',
                    'orders.name',
                    'orders.surname',
                    'orders.email',
                    'orders.telephone_number',
                    'orders.total',
                    'items.user_id')
            ->join('item_order','order_id','=','orders.id')
            ->join('items','items.id','=','item_order.item_id')
            ->where('items.user_id','=', $current_user)
// Per far funzionare groupBy e risolvere il bug dei link dato da distinct()->paginate() bisogna scrivere a mano ogni singola colonna
            ->groupBy('orders.id',
                    'orders.updated_at',
                    'orders.created_at',
                    'orders.name',
                    'orders.surname',
                    'orders.email',
                    'orders.telephone_number',
                    'orders.total',
                    'items.user_id')
            ->orderBy('orders.updated_at','desc')
            ->paginate(10);

        // dd($current_user, $orders);

        return view('admin.orders.index', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $items = DB::table('orders')
            ->select('items.*', 'item_order.quantity')
            ->join('item_order','order_id','=', 'orders.id')
            ->join('items','items.id','=','item_order.item_id')
            ->where('item_order.order_id', '=', $order->id)
            ->distinct()->get();

        return view('admin.orders.show', compact('order', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('cancelled', "$order->name cancellato correttamente.");
    }
}
