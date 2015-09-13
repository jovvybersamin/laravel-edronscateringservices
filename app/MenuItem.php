<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //

    protected $fillable = ['name','menu_id','price_per_head'];

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

}
