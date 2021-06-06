<?php

namespace App\Http\Controllers;
use App\produits;
use App\categories;
use Illuminate\Http\Request;

class shopController extends Controller
{

  

    public function search()
    {
       
             $q = request()->input('se');
     $produits=produits::where('nom','like',"%$q%")->paginate(0);
     $categories=categories::all();
        //dd($produits);
     return view('pharma.search')->with('produits',$produits)->with('categories',$categories);
       
     
    }

    public function show()
    {
        $produits=produits::all();
        $categories=categories::all();
    return view('pharma/shop',['produits'=>$produits],['categories'=>$categories]);
    }


    public function showS()
    {
       // $produits=produits::all();
        $categories=categories::all();
    return view('pharma/shop-single',['categories'=>$categories]);
    }


    public function Affiche($id)
 {
    $produits=produits::where('id',$id)->get();
    $categories=categories::all();
    //dd($produits);
    return view('pharma/shop-single', compact('produits','categories'));

    // return view('pharma/shop-single',['produits'=>$produits],['categories'=>$categories]);

 }

    // public function addPanier( $id)
    // {
      
    //     $produits=produits::where('idProduit',$id)->get();
       

        
    //     return redirect()->back();

        
    // }  
      






    // public function searchCat($id)
    // {
    //     $produits=produits::where('idCategorie',$id)->get();
    //  //dd($produits);
    // return view('pharma/searchCat',['produits'=>$produits]);
    // }

    
    
}
