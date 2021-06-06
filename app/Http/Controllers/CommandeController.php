<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
use Illuminate\Support\Facades\DB;
class CommandeController extends Controller
{
     public function index(){
		if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$listcom = Commande::all();
    	return view('gescom',['listcom'=>$listcom]);
    }
    public function create(){
    	
    }
    public function store(Request $request){
		if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$Commande = new Commande();
		$Commande->montant=$request->input('montant');
		$Commande->type=$request->input('type');
    	$Commande->idClient=$request->input('idClient');
    	$Commande->idProduit=$request->input('idProduit');
    	$Commande->save();	
    	return redirect('gescom');
    }
    public function edit($id){
		if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$Commande=Commande::find($id);
    	return view('editcom',['Commande'=>$Commande]);
    	
    }
    public function update(Request $request,$id){
    	if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$Commande=Commande::find($id);
    	$Commande->montant=$request->input('montant');
    	$Commande->idClient=$request->input('idClient');
    	$Commande->idProduit=$request->input('idProduit');
    	$Commande->save();
    	return redirect('gescom');

    }
	public function destroyCo($id)
    {
		if(!session()->has('da'))
        {
            return redirect('connA');
        }
        //$paniers = paniers::find($id);
        DB::delete('delete from commandes where id = ?',[$id]);
        return redirect()->back();
    }
}
