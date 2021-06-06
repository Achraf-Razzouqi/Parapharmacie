<?php

namespace App\Http\Controllers;
use App\paniers;
use App\commandes;
use App\categories;
use Auth;
use App\Imput;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
   public function del($a)
   {

   // $members = $request->input('type');
   //$result=$request[''];


      if(Auth::user()==null)
      {
          return view('Auth/login');
      }
      else
      {
      
    $id=Auth::user()->id;
      $data=DB::table('paniers')
      ->join('produits','produits.id','=','paniers.idProduit')
      ->select('paniers.idPanier','paniers.idProduit','produits.nom','produits.prix','paniers.qte','produits.img')
      ->where('idClient','=',$id)
      ->get();


  $paniers=paniers::where('idClient','=',$id);
  $categories=categories::all();
  
  //dd($data);
  // if(isset($_GET['buy']))
  // {
    $cpt=0;
   
  foreach ($data as $P)
  { $commandes= new commandes();
    $z=$P->prix-$P->prix*0.1;
     $idProduit=$P->idProduit;
   //   $idPanier=$P->idPanier;
     $commandes->idProduit=$idProduit;
   //   $commandes->idPanier=$idPanier;
     $commandes->idClient=$id;
     $commandes->type=$a;
     $commandes->montant=$z;
    $commandes->save();
   }     
  // dd($cpt); 

    //dd($commandes);
DB::delete('delete from paniers where idClient = ?',[$id]);
//dd($commandes);
  return view('pharma.thankyou',['data'=>$data],['categories'=>$categories]);
  }
}



public function delE($b)
{

// $members = $request->input('type');
//$result=$request[''];


   if(Auth::user()==null)
   {
       return view('Auth/login');
   }
   else
   {
   
 $id=Auth::user()->id;
   $data=DB::table('paniers')
   ->join('produits','produits.idProduit','=','paniers.idProduit')
   ->select('paniers.idPanier','paniers.idProduit','produits.nom','produits.prix','paniers.qte','produits.img')
   ->where('id','=',$id)
   ->get();


$paniers=paniers::where('id','=',$id);


//dd($data);
// if(isset($_GET['buy']))
// {
 $cpt=0;

foreach ($data as $P)
{ $commandes= new commandes();
 $cpt++;
 //dd($P);
  $idProduit=$P->idProduit;
//   $idPanier=$P->idPanier;
  $commandes->idProduit=$idProduit;
//   $commandes->idPanier=$idPanier;
  $commandes->id=$id;
  $commandes->type=$b;
 $commandes->save();
}     
// dd($cpt); 

 //dd($commandes);
 $categories=categories::all();
DB::delete('delete from paniers where idClient = ?',[$id]);
//dd($commandes);
return view('pharma.thankyou',['data'=>$data],['categories'=>$categories]);
}
}



}