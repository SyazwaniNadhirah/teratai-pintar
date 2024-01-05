<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'programType',
        'price',
        'status',
        'description',
        'picture',
    ];

    public function application()
    {
        return $this->hasMany(Application::class);
    }
}