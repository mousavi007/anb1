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

    public function addfard(Request $request){

        $fard= new Fard();
        $fard->name=$request->name_fard;
        $fard->semat=$request->semat_fard;
        $fard->save();
        return redirect()->back();
    }
}