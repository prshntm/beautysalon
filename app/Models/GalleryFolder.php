<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryFolder extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function photos()
    {
        return $this->hasMany(Photo::class, 'gallery_id');
    }
    public function staff()
    {
        return $this->hasMany(Staff::class, 'gallery_id');
    }
}
