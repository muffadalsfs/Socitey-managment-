<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
     protected $fillable = ['user_id','unit_id','phone','dob'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function unit() {
        return $this->belongsTo(Unit::class);
    }
    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
    public function visitors() {
        return $this->hasMany(Visitor::class);
    }
    public function payments() {
        return $this->hasMany(Payment::class);
    }
    public function complaints() {
        return $this->hasMany(Complaint::class);
    }
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
