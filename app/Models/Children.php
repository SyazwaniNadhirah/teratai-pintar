<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'name',
        'ic',
        'age',
        'gender',
        'dob',
        'relationship',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
