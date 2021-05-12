<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'parent_id', 'slug'];

    // public function servicesCategorie()
    // {
    //     return $this->hasMany('App\Models\ServicesCategories');
    // }



    public function categoriePublications()
    {
        return $this->hasMany('App\Models\Publication');

        // Categories::with('categoriePublications')->get();


        // tinker
        // Categories::where('id',1)->with('categoriePublicationss')->get();
    }
    public function categorie()
    {
        return $this->belongsTo('App\Models\categorie');
    }

    public  function parent_categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'parent_id');
    }
    public function subcategories()
    {
        return $this->hasMany('App\Models\Categorie', 'parent_id');
    }
    public function servicescategorie()
    {
        return $this->hasMany('App\Models\ServicesCategorie');
    }

    public function service()
    {
        return $this->belongsToMany('App\Models\Service', 'services_categories');
    }
}
