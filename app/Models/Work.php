<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'work';
    protected $fillable = [
        'title',
        'content',
        'start_date',
        'end_date',
        'status',
        'user_id',
        'project_id',
    ];
}
