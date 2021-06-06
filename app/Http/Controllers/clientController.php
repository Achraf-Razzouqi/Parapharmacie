<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{
    public function index(){
      if(!session()->has('da'))
      {
          return redirect('connA');
      }
        $listcli = User::all();
        return view('gescli',['listcli'=>$listcli]);
    }
    public function create(){
    }
    public function store(Request $request){
      if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $User = new User();
        $User->name=$request->input('nomComplet');
        $User->email=$request->input('adresse');
        $User->password=$request->input('password');
        $User->adresse=$request->input('img');
        $User->type=$request->input('type');
        $User->save();  
        return redirect('gescli');
    }
    public function edit($id){
      if(!session()->has('da'))
        {
            return redirect('connA');
        }
        $User = User::find($id);
        return view('editcli',['User'=>$User]);
    }
    public function update(Request $request ,$id){
      if(!session()->has('da'))
      {
          return redirect('connA');
      }
    	$User=User::find($id);
        $User->name=$request->input('name');
        $User->email=$request->input('email');
        $User->adresse=$request->input('adresse');
        $User->password=$request->input('password');
        $User->type=$request->input('type');
        $User->save();
        return redirect('gescli');
    }
    public function destroyCl($id)
    { if(!session()->has('da'))
      {
          return redirect('connA');
      }
        //$paniers = paniers::find($id);
        DB::delete('delete from users where id = ?',[$id]);
        return redirect()->back();
    }
}
