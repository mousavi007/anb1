<?php
namespace App\Http\Controllers;
use App\Fard;
use App\Groupkala;
use App\User;
use Illuminate\Http\Request;
class Fard extends Controller
{
    public function manage(){

        $fards=Fard::all();
        return view('fard',['fards' => $fards]);
    }
    
    
}