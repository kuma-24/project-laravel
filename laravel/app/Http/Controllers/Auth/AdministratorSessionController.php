<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdministratorSessionController extends Controller
{
  public function create(): View
  {
    return view('admins.auth.login');
  }

  public function store(Request $request) 
  {
    $credentials = $request->only(['employee_code', 'password']);

    if (Auth::guard('admin')->attempt($credentials)) {
      return redirect()->route('admins.index');
    
    } else {
      return redirect()->route('admins.login');
    }
  }

  public function destroy(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect()->route('admins.top');
  }
}