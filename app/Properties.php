<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
   public function properties_features()
    {
        return $this->hasOne('App\PropertiesFeatures','property_id');
    }

    public function locations()
    {
        return $this->belongsTo('App\Locations','location_id');
    }

    public function properties_types()
    {
        return $this->belongsTo('App\PropertiesTypes','properties_type_id');
    }

    public function agents()
    {
        return $this->belongsTo('App\Agents','agent_id');
    }
}
