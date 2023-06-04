<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'text',
        'publication_date',
        'contributor_name',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
