<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    /**
     * Get the image
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
