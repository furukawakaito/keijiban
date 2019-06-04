<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller{
    public function loginView(){
        return view('user.login');
  }

  public function loginPost(Request $request){
    $this->validate($request,[
      'email' => 'email|required',
      'password' => 'required|min:4'
      ]);

      if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
        return redirect()->route('top');
        }
        return redirect()->back();
  }
    
  public function signup(){
    return view('user.signup');
  }

  public function postSignup(Request $request){
    // バリデーション
    $this->validate($request,[
      'name' => 'required',
      'email' => 'email|required|unique:users',
      'password' => 'required|min:4'
    ]);
   
    // DBインサート
    $user = new User([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
    ]);
   
    // 保存
    $user->save();
   
    // リダイレクト
    return redirect()->route('login');
  }

  public function logout(){
    Auth::logout();
    return redirect()->route('login');
  }
}