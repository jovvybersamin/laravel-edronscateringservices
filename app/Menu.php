<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','is_main_course'];


    /**
     * Return all the none main course menus.
     *
     * @param $query
     * @return mixed
     */
    public function scopeNotMainCourse($query)
    {
        return $query->where('is_main_course',0);
    }

    /**
     * Return all the main course menus.
     *
     * @param $query
     * @return mixed
     */
    public function scopeIsMainCourse($query)
    {
        return $query->where('is_main_course',1);
    }

}
