<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class post extends Model
{
    use HasFactory;
    // use Sluggable;

    //  protected $fillable = ['title', 'excerpt', 'body'];     //Hanya ini yg boleh diisi
    protected $guarded = ['id'];      //ini yg gaboleh diisi, sisanya boleh

     public function category(){
         return $this->belongsTo(Category::class);
     }

     public function user(){
        return $this->belongsTo(User::class);
    }

    //  public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
