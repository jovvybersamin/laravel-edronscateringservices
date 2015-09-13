<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageRule extends Model
{
    //

    protected $fillable = ['package_id','menu_id','no_of_items'];


    /**
     * Get the package that owns the rules.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Package');
    }


    /**
     * Get the menu that owns the rules.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function getMenu($attribute)
    {
        return $this->menu->{$attribute};
    }

}
