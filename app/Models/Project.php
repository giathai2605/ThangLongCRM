<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'description',
        'department_id',
        'start_date',
        'end_date',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
