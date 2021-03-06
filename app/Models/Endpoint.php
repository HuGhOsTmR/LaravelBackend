<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'codendpoint',
        'url',
        'description',        
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
