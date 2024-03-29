<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childrens extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function parents()
    {
        return $this->belongsTo(Childrens::class);
    }
}
