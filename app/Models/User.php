<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    const FUNCAO_DEFAULT = 2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  bcrypt($value);
    }
    public function setFuncaoIdAttribute($value)
    {
        $this->attributes['funcao_id'] = $value ? $value : self::FUNCAO_DEFAULT;
    }

    public function setRememberTokenAttribute($value)
    {
        $this->attributes['remember_token'] = $value ? Str::random(40): null;
    }

    public function funcao()
    {
        return $this->belongsTo(Funcao::class, 'funcao_id', 'id');
    }
}
