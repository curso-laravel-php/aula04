<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Usando Model Elloquent
    public function index(Request $req){
        
        $req->validate([
            'name' => 'nullable|alpha|min:3|max:355'
        ]);
        
        $me = User::select(['id','name']);        
        if($req->name){
           $me->where('name','like',"$req->name%"); 
        }
        $usuarios = $me->get();
       
        return view('usuarioslist',['usuarios' => $usuarios]);
    }

    //Usando Query Builder
    public function index2(Request $req){
        
        $req->validate([
            'name' => 'nullable|alpha|min:3|max:355'
        ]);
        
        $qb = DB::table('users')->select(['id','name']);        
        if($req->name){
           $qb->where('name','like',"$req->name%"); 
        }
        $usuarios = $qb->get();
        
       
        return view('usuarioslist',['usuarios' => $usuarios]);
    }
}
