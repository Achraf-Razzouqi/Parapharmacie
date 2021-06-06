<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    protected $table='produits';
    protected $primarykey='idProduit';
    protected $fillable=['nom,description,prix,qte,img,idCategorie'];
}

