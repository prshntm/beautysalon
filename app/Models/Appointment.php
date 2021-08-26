<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appointment extends Model
{
    use HasFactory;
    protected $appoint_date = 'appoint_date';
    protected $fillable = [
        'user_id',
        'staff_id',
        'service_id',
        'time_start',
        'appoint_date',
    ];
    public function setDateAttribute( $value ) {
        $this->attributes['appoint_date'] = (new Carbon($value))->format('d/m/y');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
