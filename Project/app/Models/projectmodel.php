<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectmodel extends Model
{
    protected $table = 'project';
    public $timestamps = false;
    protected $fillable = ['body'];
}

