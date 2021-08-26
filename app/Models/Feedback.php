<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = ['feedback_text', 'staff_id', 'user_id'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
