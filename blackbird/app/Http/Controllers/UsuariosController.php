<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UsuariosController extends Controller
{
    public function perfil(){

      $user = Auth::user();

      return view('profile', compact('user'));
    }
}
