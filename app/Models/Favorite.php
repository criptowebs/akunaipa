<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'publication_id'];
    protected $hidden = ['pivot'];
    public function user()
    {
        // consult users favorites of a publication
        return $this->belongsTo('App\Models\User');
        // Favorite::with('user')->get();

    }

    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }
}
