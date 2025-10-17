<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
 protected $fillable = ['resident_id','name','relation','visiting_at','leaving_at'];
    public function resident() {
        return $this->belongsTo(Resident::class);
    }
}
