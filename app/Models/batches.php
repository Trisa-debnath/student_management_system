<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batches extends Model
{
    use HasFactory;
    protected $fillable = ['name','course_id','start_date'];

    public function course()
    {
        return $this->belongsTo(course::class);
    }





   


}
