<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'title', 'author', 'description', 'price', 'image', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
