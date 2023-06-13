<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryInvite extends Model
{
    use HasFactory;
    protected $fillable = [
        'story_id',
        'from_user_id',
        'to_user_id',
    ];
}
