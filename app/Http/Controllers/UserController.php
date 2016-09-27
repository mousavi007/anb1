<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signin(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:4'
        ] );
        if(Auth::attempt(['username' => $request['username'],'password' => $request['password']])){
            return redirect()->route('home');
        }
        return redirect()->back();
    }
    public function gethome(){
        return view('home');
    }
    public function signup(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ] );
        $username=$request['username'];
        $first_name=$request['first_name'];
        $password =bcrypt($request['password']);
        $user=new User();
        $user->username=$username;
        $user->name=$first_name;
        $user->password=$password;
        $user->save();
        Auth::login($user);
        return redirect()->route('home');
    }

    public function signout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}