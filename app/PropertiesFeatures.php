<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertiesFeatures extends Model
{
    public function properties()
    {
        return $this->belongsTo('App\Properties');
    }
}
