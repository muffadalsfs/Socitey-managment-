<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['resident_id','amount','month_for','status','paid_at'];
    public function resident() {
        return $this->belongsTo(Resident::class);
    }
}
