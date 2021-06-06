<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\categories;
use App\fournisseurs;
use App\Produit;
use Illuminate\Support\Facades\DB;
class FournisseurController extends Controller
{
    public function index(){
        
    	
        $listfour = Fournisseur::all();
        return view('gesfour',['listfour'=>$listfour]);
    }
    public function create(){
    	
    }
    public function store(Request $request){
    	
        $Fournisseur = new Fournisseur();
        $Fournisseur->nomComplet=$request->input('nomComplet');
        $Fournisseur->password=$request->input('password');
        $Fournisseur->adresse=$request->input('adresse');
        $Fournisseur->tel=$request->input('tel');
        $Fournisseur->save();  
        return redirect('gesfour');
    }
    public function edit($id){
    	
        $Fournisseur=Fournisseur::find($id);
        return view('editfour',['Fournisseur'=>$Fournisseur]);
    }
    public function update(Request $request,$id){
    	 $Fournisseur=Fournisseur::find($id);
        $Fournisseur->nomComplet=$request->input('nomComplet');
        $Fournisseur->password=$request->input('password');
        $Fournisseur->adresse=$request->input('adresse');
        $Fournisseur->tel=$request->input('tel');
        $Fournisseur->save();  
        return redirect('gesfour');
    }
   
    public function destroyF($id)
    {
        //$paniers = paniers::find($id);
        DB::delete('delete from fournisseurs where id = ?',[$id]);
        return redirect()->back();
    }




    public function editF($id)
    {
        
        $Fournisseur=Fournisseurs::find($id);
        // $data=DB::table('fournisseurs')
        // ->where('id','=',2);
        // dd($data,$fournisseurs);
        return view('FOURmod',['Fournisseur'=>$Fournisseur]);
    }
    public function updateF(Request $request,$id){
         $Fournisseur=Fournisseur::find($id);
        $Fournisseur->nomComplet=$request->input('nomComplet');
        $Fournisseur->password=$request->input('password');
        $Fournisseur->adresse=$request->input('adresse');
        $Fournisseur->tel=$request->input('tel');
        $Fournisseur->save();  
        return redirect('FOURmod/'.$id.'');
    }

    
    
    public function AuthF(Request $request)
    {
      
      $fournisseurs=fournisseurs::all();
      foreach($fournisseurs as $f)
      {
        if($request['nomComplet'] == $f->nomComplet)
        {
          if ($request['password'] == $f->password)
           {
            $request->session()->put('data',$f);
             $listprod=Produit::all();
            // $four=$f->id;
             //dd($four);
             return view('FOURgesprod',['listprod'=>$listprod],['f',$f]);
          }
        }

      }
      
      return redirect()->back();  

      
       
    }


    public function dec()
    {
        session(['data' => null]);
        return view('connF');
    }
}
