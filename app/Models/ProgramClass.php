<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramClass extends Model
{
    use HasFactory;

    protected $fillable =[
        'program_id',
        'name',
        'skills',
        'description',
        'subject',
      
        
    ];

    protected $casts = [
        'skills' => 'array',
        'description' => 'array',
        'subject' => 'array',
    ];

    public function application()
    {
        return $this->hasMany(Application::class);
    }
}
