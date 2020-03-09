<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'age', 'sex', 'address'];
    public function user() {
      return $this->belongsTo(User::class);
    }
}
