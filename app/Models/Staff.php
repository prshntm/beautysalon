<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    //специальности мастеров
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'specialisations');
    }
    public function galleryfolders()
    {
        return $this->belongsTo(GalleryFolder::class, 'gallery_id');
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    public function getStaffFullName() //читатель (accessor) объединяет несколько атрибутов
    {
        return "{$this->first_name} {$this->second_name}";
    }
}
