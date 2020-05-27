<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'path_photo'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
