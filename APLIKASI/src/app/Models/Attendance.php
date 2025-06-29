<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $fillable = [
        'class_id',
        'student_id',
        'teacher_id',
        'date',
        'status',
    ];

    public function class() {
        return $this->belongsTo(ClassModel::class);
    }
    public function student() {
        return $this->belongsTo(User::class, 'student_id');
    }
    public function teacher() {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
