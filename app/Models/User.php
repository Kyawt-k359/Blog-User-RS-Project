<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $fillable=['name','slug'];
    use HasFactory;

    public function blogs()
    {
     // a user hasMany blogs
     return $this->hasMany(Blog::class);
     
    }
}
