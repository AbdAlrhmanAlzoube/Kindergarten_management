<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'teacher_id',
        'name',
        'type',
        'description'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
