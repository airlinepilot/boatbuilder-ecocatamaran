<?php

namespace App\Http\Controllers;

use App\Boat;
use App\Part;
use App\Item;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function build()
        {
            $boats = Boat::all();
            $items = Item::all();
            $parts = Part::all();
            return view("build",[
                'boats'=>$boats,
                'parts'=>$parts,
                'items'=>$items,
            ]);
        }
}
