<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['email'];
    
    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
