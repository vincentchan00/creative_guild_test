<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $guarded = ['id'];

    public function photographer()
    {
        return $this->belongsTo(Photographer::class, 'photographer_id','id');
    }

    public function media()
    {
        return $this->hasOne(Media::class, 'media');
    }
}
