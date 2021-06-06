<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function index(){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $listcat = Categorie::all();
        return view('gescat',['listcat'=>$listcat]);
    }
    public function create(){
        
    }
    public function store(Request $request){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Categorie = new Categorie();
        $Categorie->nom=$request->input('nom');
        $Categorie->save();  
        return redirect('gescat');
    }
    public function edit($id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Categorie=Categorie::find($id);
        return view('editcat',['Categorie'=>$Categorie]);
    }
    public function update(Request $request,$id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Categorie=Categorie::find($id);
        $Categorie->nom=$request->input('nom');
        $Categorie->save();  
        return redirect('gescat');    
    }
    public function destroy(Request $request,$id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Categorie=Categorie::find($id);
        $Categorie->delete();
        return redirect('gescat');
    }




      public function indexF(){
        if(!session()->has('data'))
        {
            return redirect('connF');
        }
        $listcat = Categorie::all();
        return view('FOURgescat',['listcat'=>$listcat]);
    }
    public function storeF(Request $request){
        if(!session()->has('data'))
        {
            return redirect('connF');
        }
        $Categorie = new Categorie();
        $Categorie->nom=$request->input('nom');
        $Categorie->save();  
        return redirect('FOURgescat');
    }
    public function editF($id){
        if(!session()->has('data'))
        {
            return redirect('connF');
        }
        $Categorie=Categorie::find($id);
        return view('FOUReditcat',['Categorie'=>$Categorie]);
    }
    public function updateF(Request $request,$id){

        $Categorie=Categorie::find($id);
        $Categorie->nom=$request->input('nom');
        $Categorie->save();  
        return redirect('FOURgescat');    
    }
    public function destroyF(Request $request,$id){
        $Categorie=Categorie::find($id);
        $Categorie->delete();
        return redirect('FOURgescat');
    }
}
