<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::select(['name'])->get();
        //$usuarios = DB::table('users')->select(['name'])->get();
        return view('usuarioslist',['usuarios' => $usuarios]);
    }
}
