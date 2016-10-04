<?php
namespace App\Http\Controllers;
use App\Groupkala;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function manage(){

        $groupkalas=Groupkala::all();
        return view('groupkala',['groupkalas' => $groupkalas]);
    }
}