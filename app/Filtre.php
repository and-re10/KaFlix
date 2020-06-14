<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filtre extends Model
{
    protected $table = "filters";

    public function myVideos() {
        return $this->hasMany('App\MyVideo');
    }
}
