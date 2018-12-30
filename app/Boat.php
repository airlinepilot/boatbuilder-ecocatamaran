<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $fillable = [
            'name',
            'image',
            'cost',
    ];
    public function defaultitems() {
	    return $this->belongsToMany('App\Item',  'boat_item', 'boat_id', 'item_id')->wherePivot('default','checked');	
    }
    public function items() {
	    return $this->belongsToMany('App\Item',  'boat_item', 'boat_id', 'item_id')->withPivot('default');
    }
}
