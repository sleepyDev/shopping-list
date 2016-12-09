<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // Represents a single instance of Store
    protected $fillable = ['name', 'type'];
    protected $table = 'Stores';
    public function shoppingLists() {
        return $this->belongsToMany('App\ShoppingList', 'Stores_ShoppingLists', 'store_id', 'shopping_list_id');
    }
    public function type() {
        return $this->belongsTo('App\StoreType', 'store_type_id');
    }
}
