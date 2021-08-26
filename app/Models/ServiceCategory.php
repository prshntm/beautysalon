<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ServiceCategory extends Model
{
    //use HasFactory;
    use NodeTrait;
    protected $guarded =[];
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
