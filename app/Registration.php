<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function season()
    {
        return $this->belongsTo('App\Season');
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Lesson')
                    ->withPivot('show_participation')
                    ->withTimestamps();
    }
}
