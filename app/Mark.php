<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //

    protected $fillable = ['term', 'maths','science', 'history'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
