<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Represents one instance of a Category
    protected $fillable = ['name', 'order'];
    protected $table = 'Categories';
    public function listItems() {
        return $this->hasMany('App\ListItem');
    }
}
