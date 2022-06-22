<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
  Public function destroy()
  {
    auth()->logout();

    return redirect('/')->with('success', 'Goodbye!');
  }
}