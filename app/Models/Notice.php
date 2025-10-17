<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
     protected $fillable = ['title','body','published_at','created_by'];

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
