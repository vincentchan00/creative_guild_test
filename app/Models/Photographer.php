<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table = 'photographer';
    protected $guarded = ['id'];

    public function album()
    {
        return $this->hasMany(Album::class, 'photographer_id');
    }

    public function media()
    {
        return $this->hasOne(Media::class, 'media');
    }
}
