<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyVideo extends Model
{
    public function filtre() {
        return $this->belongsTo('App\Filtre');
    }
}
