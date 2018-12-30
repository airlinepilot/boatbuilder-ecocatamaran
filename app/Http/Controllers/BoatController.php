<?php

namespace App\Http\Controllers;

use App\Boat;
use App\Part;
use App\Item;
use Illuminate\Http\Request;

class BoatController extends Controller
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
        $boats = Boat::all();
        return view("boat/list",[
            'boats'=>$boats,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boats = Boat::all();
        $parts = Part::all();
        return view("boat/create",[
            'boats'=>$boats,
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
            $boat = new Boat;
            $boat->name = $request->name;
            $boat->image = $new_image_name;
            $boat->cost = 0;
            $image->move(public_path('/img'), $new_image_name);

            $items = $request->items;
            $defaultitems = $request->defaultitems;
            $items = array_unique(array_merge($items,$defaultitems));
            // convert string array to int array and calculate cost also
            foreach ($defaultitems as $key => $value) {
                $item_id = (int)$value;
                $item = Item::find($item_id);
                $boat->cost += $item->cost;
                $defaultitems[$key] = $item_id;
            }
            $boat->save();
            // convert string array to int array and adding to pivot table
            foreach ($items as $key => $value) {
                $item_id = (int)$value;
                $items[$key] = $item_id;
                if (in_array($item_id, $defaultitems)) {
                    $boat->items()->attach($item_id,['default'=>'checked']);
                } else {
                    $boat->items()->attach($item_id,['default'=>'']);
                }
            }
        }
        return redirect()->route("boat.list");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function show(Boat $boat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function edit(Boat $boat)
    {
        $parts = Part::all();
        $boats = Boat::all();
        $items = Item::all();
        // var_dump($boat->name);
        // die();
        return view("boat/edit",[
            'boats'=>$boats,
            'parts'=>$parts,
            'items'=>$items,
            'boat'=>$boat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boat $boat)
    {
        $image = $request->image;
        $boat->name = $request->name;
        $boat->cost = 0;
        $boat->items()->detach();

        $items = $request->items;
        $defaultitems = $request->defaultitems;
        $items = array_unique(array_merge($items,$defaultitems));
        // convert string array to int array and calculate cost also
        foreach ($defaultitems as $key => $value) {
            $item_id = (int)$value;
            $item = Item::find($item_id);
            $boat->cost += $item->cost;
            $defaultitems[$key] = $item_id;
        }
        if ($image == NULL) {
            $boat->save();
        } elseif (substr($image->getMimeType(), 0, 5) == 'image') {
            $new_image_name =  time().'.'.$image->getClientOriginalName();
            $boat->image = $new_image_name;
            $image->move(public_path('/img'), $new_image_name);
            $boat->save();
        }
        // convert string array to int array and adding to pivot table
        foreach ($items as $key => $value) {
            $item_id = (int)$value;
            $items[$key] = $item_id;
            if (in_array($item_id, $defaultitems)) {
                $boat->items()->attach($item_id,['default'=>'checked']);
            } else {
                $boat->items()->attach($item_id,['default'=>'']);
            }
        }

        return redirect()->route("boat.list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        $boat->delete();
        return redirect()->route('boat.list');
    }
}
