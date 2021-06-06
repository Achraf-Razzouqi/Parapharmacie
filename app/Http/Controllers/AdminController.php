<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Produit;

use App\Commande;

class AdminController extends Controller
{
    public function index(){
    	
    }
    public function create(){
    	
    }
    public function store(){
    	
    }
    public function edit($id){
    	if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $Admin=Admin::find($id);
        return view('modadm',['Admin'=>$Admin]);
    }
    public function update(Request $request,$id){
        if(!session()->has('da'))
        {
            return redirect('connA');
        }
    	$Admin=Admin::find($id);
        $Admin->login=$request->input('login');
        $Admin->password=$request->input('password');
        $Admin->save();  
        return redirect('modadm/'.$id); 
    }
    public function destroy(){
    	
    }
           
    

    public function AuthA(Request $request)
    {
      
      $admins=Admin::all();
      
      foreach($admins as $f)
      {
        if($request['login'] == $f->login)
        {
          if ($request['password'] == $f->password)
           {
            $request->session()->put('da',$f);
            
             $listcom=Commande::all();
            // $four=$f->id;
             //dd($four);
             return view('gescom',['listcom'=>$listcom],['f',$f]);
          }
        }

      }
      
      return redirect()->back();  

      
       
    }


    public function decA()
    {
        session(['da' => null]);
        return view('connA');
    }
}
