<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    // Represents a single instance of ShoppingList
    protected $fillable = ['name', 'user_id'];
    protected $table = 'ShoppingLists';
    public function stores() {
        return $this->belongsToMany('App\Store', 'Stores_ShoppingLists', 'shopping_list_id', 'store_id');
    }
    public function listItems() {
        return $this->belongsToMany('App\ListItem', 'ShoppingLists_ListItems', 'list_item_id', 'shopping_list_id');
    }
    public function owner() {
        return $this->belongsTo('App\User');
    }
    public function sharedTo() {
        return $this->belongsToMany('App\User', 'SharedLists', 'shopping_list_id', 'user_id');
    }
}
