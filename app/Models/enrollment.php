<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    use HasFactory;
    protected $fillable =['enroll_no','batches_id','student_id','join_date','fee'];
}
