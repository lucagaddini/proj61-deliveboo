<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Item;
use App\Course;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = auth()->user()->id;
        $items = Item::select('*')->where('user_id','=', $current_user )->orderBy('id', 'desc')->paginate(10);
        $courses = Course::all();
        return view('admin.items.index', compact('items', 'courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.items.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// STORAGE DELLE IMMAGINI
        // Creo validazione per il nuovo campo aggiunto ad Item (spostabile insieme alle altre validation)
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // Creo un nome univoco per le immagini che saranno caricate
        $new_image_name = time() . '-' . $request->name . '.' . $request->image->extension();

        // Sposto l'immagine vera e propria in images (non cambiare il path)
        $request->image->move(public_path('images'), $new_image_name);
// /STORAGE DELLE IMMAGINI

        $new_data = $request->all();
        $item = new Item();

        $item->image_path = $new_image_name;
        $item->user_id = auth()->user()->id;

        $item->fill($new_data);
        $item->save();

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $courses = Course::all();
        return view('admin.items.edit', compact('item', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $updated_item = $request->all();
        $item->update($updated_item);

        return redirect()->route('admin.items.index', compact('item'))->with('prodotto_modificato',"$item->name è stato modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')->with('prodotto_cancellato', "$item->name è stato cancellato correttamente.");
    }
}
