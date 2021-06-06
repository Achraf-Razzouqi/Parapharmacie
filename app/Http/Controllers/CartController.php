<?php

namespace App\Http\Controllers;
use App\Cart;
use App\produits;
use App\paniers;
use App\commandes;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
      
        if(Auth::user()==null)
        {
        $qte=$request->qte;
        $id=$request->idProduit;
        $paniers=new paniers();

        $paniers->idProduit=$id;
        $paniers->idClient=null;
        //$paniers->id=$id;
        $paniers->qte=$qte;
        $paniers->save();
            
        }
        else
        {
        $id=Auth::user()->id ;
        $qte=$request->qte;
        $idProduit=$request->idProduit;
        $paniers=new paniers();

        $paniers->idProduit=$idProduit;
        $paniers->idClient=$id;
        $paniers->qte=$qte;
        $paniers->save();
      
       
        }
        return redirect()->back()->with("success","Le produit a bien ete ajoute");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$paniers = paniers::find($id);
        DB::delete('delete from paniers where idPanier = ?',[$id]);
        return redirect()->back();
    }

   



}
