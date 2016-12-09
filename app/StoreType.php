<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    // Represents a single instance of StoreType
    protected $fillable = ['name'];
    protected $table = 'StoreTypes';
    public function stores() {
        return $this->hasMany('App\Store');
    }
}
