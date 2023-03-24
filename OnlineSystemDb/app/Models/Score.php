<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'exam_id', 'num_correct', 'total_score'];
    public $timestamps = false;
}
