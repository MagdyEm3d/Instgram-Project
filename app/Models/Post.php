<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=["caption","image","userid"];


    function users()
    {
        return $this->belongsTo(User::class,"userid");
    }
}
