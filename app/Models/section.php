<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class section extends Model
{
    use HasFactory;
    //protected $fillable = ['title', 'thumnail', 'content', 'post_as'];
    protected $fillable = ['title', 'thumnail', 'content', 'post_as'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('thumnail') && ($model->getOriginal('thumnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumnail'));
            }
        });
    }
}
