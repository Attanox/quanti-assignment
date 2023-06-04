<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'contributor_name',
        'email',
        'text',
        'publication_date',
        'article_id',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
