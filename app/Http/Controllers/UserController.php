<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
   {
    return view("user.index");
   }

   public function login(Request $request) : RedirectResponse
   {
      $request->validate([
         'email'          => 'required',
         'password'       => 'required',
     ]);

   $user = User::where('email', $request->email)->first();  
     if ($user){
        if($user->password == $request->password){
           return redirect()->route('perpustakaan.index')->with(['success' => 'Berhasil Login']);
        }else{
            return redirect()->route("user.index")->with(['error' => 'Gagal Login - pass salah']);
        }
      }
      return redirect()->route("user.index")->with(['error' => 'Gagal Login - Email salah']);
   }

   public function showRegisterForm()
    {
        return view('user.register');
    }

    public function register(Request $request): RedirectResponse
   {
       // validate form
      $request->validate([
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
       ]);


      User::create([
         'name' => $request -> name,
         'email' => $request -> email,
         'password' => $request -> password,
           ]);

      return redirect()->route("user.index");
    }
}
