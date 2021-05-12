<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img', 'service_state'];
    protected $hidden = ['pivot'];


    public function servicesCategories()
    {
        return $this->hasMany('App\Models\ServicesCategorie');
    }
}
