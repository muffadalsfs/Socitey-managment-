<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['amenity_id','resident_id','date_from','date_to','status'];
    public function amenity() {
        return $this->belongsTo(Amenity::class);
    }
    public function resident() {
        return $this->belongsTo(Resident::class);
    }
}
