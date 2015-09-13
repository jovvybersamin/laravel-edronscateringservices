<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageCourse extends Model
{

    protected $fillable = [
        'package_id','no_of_main_courses','price_per_head'
    ];


    /**
     * Get the package that owns the courses.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo('App\Package');
    }

}
