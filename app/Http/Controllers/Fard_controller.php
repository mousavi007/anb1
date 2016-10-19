<?php
namespace App\Http\Controllers;
use App\Fard;
use App\Groupkala;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Fard_controller extends Controller
{
    public function manage(){

        $fards=Fard::all();
        return view('fard',['fards' => $fards]);
    }
}