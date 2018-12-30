<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'image',
        'cost',
        'link',
        'part_id',

    ];
    public function part()
    {
        return $this->belongsTo('App\Part');
    }
    public function boats() {
	    return $this->belongsToMany('App\Boat',  'boat_item', 'item_id', 'boat_id')->withPivot('default');
    }
}
