<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable =['enrollmant_id','paid_date','amount'];

    public function enrollmant()
    {
        return $this->belongsTo(enrollmant::class);
    }

}
