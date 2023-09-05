<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'service';
    protected $fillable = [
        'name',
        'service_code',
        'price',
        'category_id',
        'status',
        'description',
    ];
}
