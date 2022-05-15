<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postl extends Model
{
    use HasFactory;
    protected $guarded = ['id'];      //ini yg gaboleh diisi, sisanya boleh


    public function kategoriLayanan(){
        // Menghubungkan 2 tabel untuk relasi one-to-one
        return $this->belongsTo(kategoriLayanan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
 }
