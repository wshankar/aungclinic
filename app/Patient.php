<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'age', 'sex', 'address'];
    public function user() {
      return $this->belongsTo(User::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
       return route("patients.show", $this->slug);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format("d-m-Y");
    }
}
