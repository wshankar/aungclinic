<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($visit){
            $visit->patient->increment('visits');
        });
    }
}
