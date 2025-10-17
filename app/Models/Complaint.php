<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = ['resident_id','title','description','status','assigned_to'];

    public function resident() {
        return $this->belongsTo(Resident::class);
    }
    public function assignedUser() {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
