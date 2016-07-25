<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
  public function login(Request $request) {

      $user = Sentinel::forceAuthenticate($request->all());

      if(Sentinel::getUser()->roles()->first()->slug == 'admin'){
        return redirect('/system/admin');
      } elseif (Sentinel::getUser()->roles()->first()->slug == 'clerk') {
        return redirect('/birth/register');
      } else {
        return redirect('/');
      }

    }

    public function logout() {
      Sentinel::logout();

      return redirect('/');
    }
}
