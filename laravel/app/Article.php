<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
