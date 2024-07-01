<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemesterMaster extends Model
{
    
    protected $table = 'semester_master';
    protected $primaryKey = 'sem_id';
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';
    use HasFactory;

        protected $fillable = [
        'course_id',
        'semester_number',
        'status',
        'created_on',
        'updated_on',
        'created_by',
    ];
}
