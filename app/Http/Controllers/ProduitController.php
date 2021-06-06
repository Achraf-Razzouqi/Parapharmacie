<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
   	 public function index(){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $listprod=Produit::all();
        return view('gesprod',['listprod'=>$listprod]);
    }

    public function indexF(){
        if(!session()->has('data'))
        {
            return redirect('connF');
        }
        $listprod=Produit::all();
        //dd($_SESSION['auth']);
        return view('FOURgesprod',['listprod'=>$listprod]);
    }
    public function create(){
    	
        
    }

        public function storeF(Request $request)
        {
            if(!session()->has('data'))
            {
                return redirect('connF');
            }
        $Produit = new Produit();
        $Produit->nom=$request->input('nom');
        $Produit->description=$request->input('description');
        $Produit->prix=$request->input('prix');
        $Produit->qte=$request->input('qte');
        $Produit->idFournisseur=$request->input('idFournisseur');
        $Produit->idCategorie=$request->input('idCategorie');

        $Produit->img=$request->input('img');
        $Produit->save();
        return redirect('FOURgesprod');
    }

    public function store(Request $request){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$Produit = new Produit();
        $Produit->nom=$request->input('nom');
        $Produit->description=$request->input('description');
        $Produit->prix=$request->input('prix');
        $Produit->qte=$request->input('qte');
        $Produit->idFournisseur=$request->input('idFournisseur');
        $Produit->idCategorie=$request->input('idCategorie');

        $Produit->img=$request->input('img');
/*echo "string";
        if ($request->hasfile('img')) {

            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/gesprod',$filename);
            $Produit->img=$filename;
        }else{
            return $request;
            $Produit->img='';
        }
        */
        $Produit->save();
        return redirect('gesprod');
    }
    public function edit($id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Produit=Produit::find($id);
        return view('editprod',['Produit'=>$Produit]);
        
    }

    public function editF($id){
        if(!session()->has('data'))
        {
            return redirect('connF');
        }
        $Produit=Produit::find($id);
        return view('FOUReditprod',['Produit'=>$Produit]);
        
    }
    public function update(Request $request,$id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Produit=Produit::find($id);
        $Produit->nom=$request->input('nom');
        $Produit->description=$request->input('description');
        $Produit->prix=$request->input('prix');
        $Produit->qte=$request->input('qte');
        $Produit->img=$request->input('img');
        $Produit->idFournisseur=$request->input('idFournisseur');
        $Produit->idCategorie=$request->input('idCategorie');
        $Produit->save();
        return redirect('gesprod');
    }
    public function destroyP($id)
    {
        //$paniers = paniers::find($id);
        DB::delete('delete from produits where id = ?',[$id]);
        return redirect()->back();
    }

        public function updateF(Request $request,$id){
            if(!session()->has('da'))
            {
                return redirect('connA');
            }
        $Produit=Produit::find($id);
        $Produit->nom=$request->input('nom');
        $Produit->description=$request->input('description');
        $Produit->prix=$request->input('prix');
        $Produit->qte=$request->input('qte');
        $Produit->img=$request->input('img');
        $Produit->idFournisseur=$request->input('idFournisseur');
        $Produit->idCategorie=$request->input('idCategorie');
        $Produit->save();
        return redirect('FOURgesprod');
    }
    public function destroyF($id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Produit=Produit::find($id);
        $Produit->delete();
        return redirect('FOURgesprod');
    }
}
