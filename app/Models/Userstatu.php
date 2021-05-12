<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userstatu extends Model
{
    use HasFactory;
    protected $fillable = ['name_status'];

    public function users()
    {
        // return $this->belongsTo('App\Models\User');
        return $this->hasMany('App\Models\User');
    }
}

// Userstatu::select('*')->whereHas('users.roles',function(Builder $query){$query->where('roles.name','=','administrador');})->withCount('users')->get();




// Userstatu::whereHas('roles',function(Builder $query){$query->where('name','=','usuario');})->select('*')->withCount('users')->get();
