<?php

namespace App\Http\Controllers;
use App\paniers;
use App\produits;
use App\categories;
use App\commandes;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class panierController extends Controller
{
    public function showP()
    {    
        $categories=categories::all();
        


        
        
        if(Auth::user()==null)
        {
            //$idU=Auth::user()->id;
            $data=DB::table('paniers')
        ->join('produits','produits.id','=','paniers.idProduit')
        ->select('paniers.idPanier','paniers.idProduit','produits.nom','produits.prix','paniers.qte','produits.img')
        ->where('idClient','=',null)
        ->get();
        return view('pharma.cart',['data'=>$data],['categories'=>$categories]);
        }
        else
        {
            $idU=Auth::user()->id;
            $data=DB::table('paniers')
        ->join('produits','produits.id','=','paniers.idProduit')
        ->select('paniers.idPanier','paniers.idProduit','produits.nom','produits.prix','paniers.qte','produits.img')
        ->where('idClient','=',$idU)
        ->get();


        $q = request()->input('type');
        //dd( $q);
      
        return view('pharma.cart',['data'=>$data],['categories'=>$categories],$q);
        }
        

       
    }

    
   
}
