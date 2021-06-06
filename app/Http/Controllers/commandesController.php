<?php

namespace App\Http\Controllers;
use App\paniers;
use App\produits;
use App\commandes;
use App\categories;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class commandesController extends Controller
{
   public function showProduct()
   {
    $categories=categories::all();
    if(Auth::user()!=null)
       {
    $idU=Auth::user()->id;
        $data=DB::table('commandes')
        ->join('produits','produits.id','=','commandes.idProduit')
        ->select('produits.nom','produits.prix','produits.img')
        ->where('idClient','=',$idU)
        ->get();

       }
       else
       {
           return view('auth.login');
       }
   
      
        return view('pharma.Commandes',['data'=>$data],['categories'=>$categories]);
   }
   
}

