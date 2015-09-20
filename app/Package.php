<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable = ['name','description'];

    /**
     * Get the courses for the package.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\PackageCourse');
    }

    /**
     * Get the rules for the package.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rules()
    {
        return $this->hasMany('App\PackageRule');
    }

    /**
     * Get the photo for the package.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photo()
    {
        return $this->hasOne('App\PackagePhoto');
    }

    public function menuitems()
    {
        return $this->belongsToMany('App\MenuItem','package_menu_items');
    }

    /**
     * Get the photo path of the package.
     *
     *
     * @return bool
     */
    public function getPhoto()
    {
        if ($this->photo()->count()){
            return $this->photo->path;
        }
        return false;
    }
}
