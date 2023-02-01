<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //protected $fillable=['title','slug','body'];
    use HasFactory;

    public function category()
    {
     // a blog belongs to a category
     return $this->belongsTo(Category::class);
     
    }

    public function user()
    {
     // a blog belongs to a user
     return $this->belongsTo(User::class);
     
    }

}
