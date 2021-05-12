<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'categorie_id',
        'direction',
        'municipalitie_id',
        'continuos_service',
        'open',
        'closed',
        'phone',
        'whatsapp',
        'email',
        'indication',
        'description',
        'user_id',
        'slug',
        'images',
        'state',
        'services',
        'type',
        'observation',
        'publication_state_id',
        'id'
    ];
    protected $hidden = ['pivot'];
    public function imagespublication()
    {
        return $this->hasMany('App\Models\Img_publication');
    }
    public function first_image()
    {
        return $this->hasOne('App\Models\Img_publication')->orderBy('number', 'ASC')->latest();
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }



    public function prices()
    {
        return $this->hasMany('App\Models\Prices_publication');
    }


    public function price_min()
    {
        return $this->hasOne('App\Models\Prices_publication')->orderBy('price', 'ASC');
    }

    public function is_favorite()
    {

        return $this->hasOne('App\Models\Favorite')->where('favorites.user_id', isset(Auth()->user()->id) ? Auth()->user()->id : 0)->latest();
    }

    public function publication_state()
    {
        return $this->belongsTo('App\Models\PublicationState');
    }


    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
        // Publication::with('categorie')->get();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // Publication::with('user')->get();
    }

    public function municipalitie()
    {
        // return $this->belongsTo('App\Models\Municipalitie')->join('departments', 'municipalities.department_id', '=', 'departments.id');
        // Publication::with('user')->get();

        return $this->belongsTo('App\Models\Municipalitie');
    }


    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service', 'services_publications');
    }

    public function servicespublication()
    {
        return $this->hasMany('App\Models\Services_publication');
    }
}
