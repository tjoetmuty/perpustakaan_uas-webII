<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth;

class UserController extends Controller
{
    public function index(): View
   {
    return view("user.index");
   }

   public function login(Request $request) : RedirectResponse
   {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
  ]);

  // Mencari pengguna berdasarkan email
  $user = User::where('email', $request->email)->first();

  // Jika pengguna tidak ditemukan
  if (!$user) {
      return back()->withErrors(['email' => 'Email tidak ditemukan']);
  }

  // Jika password tidak sesuai
  if (!Hash::check($request->password, $user->password)) {
      return back()->withErrors(['password' => 'Password salah']);
  }

  // Autentikasi pengguna
  if (Auth::attempt($request->only('email', 'password'))) {
      if ($user->role === 'admin') {
          return redirect()->route('perpustakaan.index')->with('success', 'Login Success, Welcome Admin!!');
          // return response()->json(['message' => 'Data saved successfully'], 200)->withCookie(cookie('message', 'Data saved successfully', 1));
      } elseif ($user->role === 'user') {
          return redirect()->route('perpustakaan.index')->with('success', 'Login Success, Welcome!!');
          // return response()->json(['message' => 'Data saved successfully'], 200)->withCookie(cookie('message', 'Data saved successfully', 1));
      }
  }

  // Pesan kesalahan default
  return back()->withErrors(['email' => 'Kredensial tidak valid']);
  //     $request->validate([
  //        'email'          => 'required',
  //        'password'       => 'required',
  //    ]);


  //  $user = User::where('email', $request->email)->first();  
  //    if ($user){
  //       if($user->password == $request->password){
  //          return redirect()->route('perpustakaan.index')->with(['success' => 'Berhasil Login']);
  //       }else{
  //           return redirect()->route("user.index")->with(['error' => 'Gagal Login - pass salah']);
  //       }
  //     }
  //     return redirect()->route("user.index")->with(['error' => 'Gagal Login - Email salah']);
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
         'role' => 'required|in:user, admin'
       ]);



      User::create([
         'name' => $request -> name,
         'email' => $request -> email,
         'password' => Hash::make($request -> password),
         'role' => $request-> role,
           ]);

      return redirect()->route("user.index");
    }
}
