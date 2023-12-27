<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'ClassName',
        'capicity',
        'age',
        'timeFrom',
        'timeTo',
        'price',
        'teacher_id'

    ];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

}
