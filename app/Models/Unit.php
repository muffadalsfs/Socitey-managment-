<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
  protected $fillable = ['block_id','number','floor','type'];
    public function block() {
        return $this->belongsTo(Block::class);
    }
    public function resident() {
        return $this->hasOne(Resident::class);
    }
}
