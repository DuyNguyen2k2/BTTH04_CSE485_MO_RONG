<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_exam extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'user_exam'];
    public $timestamps = false;
}
