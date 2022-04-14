<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'article_title',
        'article_body'
    ];

    protected $table = 'article';
}
