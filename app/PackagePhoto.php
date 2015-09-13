<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagePhoto extends Model
{
    protected $fillable = ['package_id','path'];


    /**
     * Get the package that owns this photo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Package');
    }
}
