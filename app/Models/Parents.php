<?php

namespace App\Models;

use App\Models\Childrens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parents extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'author'];

    public function childrens()
    {
        return $this->hasMany(Childrens::class);
    }

}
