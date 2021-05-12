<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices_publication extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'price', 'publication_id'];
    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
        // Municipalitie::where('id',1)->with('department')->get();

    }
}
