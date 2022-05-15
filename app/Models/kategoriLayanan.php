<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriLayanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function postl(){
        return $this->hasMany(postl::class);
    }
}
