<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    // Represents one instance of ListItem
    protected $fillable = ['name', 'category_id'];
    protected $table = 'ListItems';
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
