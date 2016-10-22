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

    public function updatefard(Request $request){
        $fard=Fard::where('id',$request->fard_qabl)->first();
        $fard->name=$request->fard_name1;
        $fard->semat=$request->fard_semat1;
        $fard->save();
        return redirect()->back();
    }
}
