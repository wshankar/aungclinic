<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['treatment', 'fees'];
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

    public function getVisitHtmlAttribute()
    {
      return \Parsedown::instance()->text($this->treatment);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
