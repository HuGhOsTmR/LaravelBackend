<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'coduser',
        'name',
        'email',
        'password',
        'codsession',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasrole($role){
        if(this->roles()->where('description',$role)->first()){
            return true;
        }
        else{
            return false;
        }
    }
    public function hasanyrole($roles){
        if (is_array($roles)){
            foreach ($roles as $role){
                if(this->hasrole($roles)){
                    return true;
                }
            }
        }
        else{
            if(this->hasrole($roles)){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function authroles ($roles){
        if(this->hasanyrole($roles)){
            return true;
        }
        else{
            return response()->json([
            'Message'=> 'You don`t have authorization to make this task',
            'Response' => 'Unauthorized'
        ]);
        }
    }
}
