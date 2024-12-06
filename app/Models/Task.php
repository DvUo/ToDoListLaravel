<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'title',
        'daytime',
        'status',
        'description'
    ];
}
