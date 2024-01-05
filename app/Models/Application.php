<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'children_id',
        'program_id',
        'class_id',
        'activity_id',
        'year_intake',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function programClass()
    {
        return $this->belongsTo(ProgramClass::class, 'class_id');
    }
}
