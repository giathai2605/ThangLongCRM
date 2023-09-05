<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnnounceForDepartment extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'announce_for_department';
    protected $fillable = [
        'title',
        'content',
        'department_id',
        'author_id',
        'updated_at',
    ];
}
