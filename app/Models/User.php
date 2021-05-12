<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use HasFactory, Notifiable;
    use HasRoles;
    use HasPermissions;

    protected $guard_name = "api";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user',
        'email',
        'password',
        'user_state_id',
        'role_id',
        'token_reset',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function publications()
    {
        return $this->hasMany('App\Models\Publication');
        // tinker
        // User::where('id',1)->with('publicationsUser')->get();
    }

    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
    public function favorites(): BelongsToMany
    {

        return $this->belongsToMany(
            Publication::class,
            'favorites',
            'user_id',
            'publication_id'
        );
    }

    public function rol()
    {
        return $this->roles()->first();
    }

    public function user_state()
    {
        return $this->belongsTo('App\Models\UserState');
    }

    public function role()
    {
        return $this->belongsTo('Spatie\Permission\Models\Role');
    }
}
