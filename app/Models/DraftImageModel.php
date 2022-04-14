<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftImageModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'draft_id',
        'link'
    ];
    
    protected $table = 'draft_image';
}
