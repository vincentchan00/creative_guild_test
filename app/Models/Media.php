<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Str;

class Media extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
         'path'
    ];
    public function photographer()
    {
        return $this->belongsTo(Photographer::class, 'media','id');
    }
}
