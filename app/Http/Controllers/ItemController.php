<?php

namespace App\Http\Controllers;

use App\Item;
use App\Part;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $items = Item::all();
        return view("item/list",[
            'items'=>$items,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $parts = Part::all();
        return view("item/create",[
            'items'=>$items,
            'parts'=>$parts,
        ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $new_image_name =  time().'.'.$image->getClientOriginalName();
        if (substr($image->getMimeType(), 0, 5) == 'image') {
            $item = new Item;
            $item->name = $request->name;
            $item->part_id = (int)$request->part;
            $item->link = $request->link;
            $item->cost = $request->cost;
            $item->image = $new_image_name;
            $image->move(public_path('/img'), $new_image_name);
            $item->save();
        }
        return redirect()->route("item.list");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $parts = Part::all();
        $items = Item::all();
        return view("item/edit",[
            'parts'=>$parts,
            'items'=>$items,
            'item'=>$item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->name = $request->name;
        $item->part_id = (int)$request->part;
        $item->link = $request->link;
        $item->cost = $request->cost;
        $image = $request->image;
        if ($image == NULL) {
            $item->save();
        }else{
            if (substr($image->getMimeType(), 0, 5) == 'image') {
                $new_image_name =  time().'.'.$image->getClientOriginalName();
                $image->move(public_path('/img'), $new_image_name);
                $item->image = $new_image_name;
                $item->save();
            }
        }
        return redirect()->route("item.list");
        
        // var_dump($image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('item.list');
    }
}
