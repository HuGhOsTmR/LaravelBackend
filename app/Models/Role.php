<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'codrole',
        'description',        
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function endpoints()
    {
        return $this->belongsToMany(Endpoint::class);
    }
}
