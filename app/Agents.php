<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    public function properties()
    {
        return $this->hasOne('App\Properties');
    }
}
