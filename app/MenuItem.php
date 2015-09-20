<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //

    protected $fillable = ['name','menu_id','price_per_head'];

    /**
     * Get the menu that owns this menu item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    /**
     * Get the packages that owns this menu item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function packages()
    {
        return $this->belongsTo('App\Package','package_menu_items');
    }


    public static function notListed($package_id)
    {
        return \DB::table('menu_items')
                ->whereNotIn('menu_items.id',function($query) use ($package_id){
                   $query->select('menu_item_id')
                         ->from('package_menu_items')
                         ->where('package_id',$package_id);
                })
                ->join('menus','menus.id', '=', 'menu_items.menu_id')
                ->select('menu_items.*','menus.name as menu')
                ->orderBy('menus.id');

    }
}
