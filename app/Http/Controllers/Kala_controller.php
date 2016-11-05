<?php
namespace App\Http\Controllers;
use App\Groupkala;
use App\Kala;
use App\Room;
use App\Fard;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class Kala_controller extends Controller
{
    public function manage()
    {
        $group_kalas=Groupkala::all();
        $rooms=Room::all();
        return view('kala',compact('rooms','group_kalas'));
    }

    public function addkala(Request $request)
    {
        $kala=Kala::where('code_amval',$request->code)->first();
        if(empty($kala)){
            $kala1=new Kala();
            $kala1->name=$request->name;
            $kala1->groupkalas_id=$request->group_kala;
            $kala1->code_amval=$request->code;
            $kala1->room_id=$request->room;
            $kala1->company=$request->company;
            $kala1->model=$request->model;
            $kala1->save();
        }
        else
        {


        }
    }

    public function search_kala(Request $request)
    {
        $kalas=Kala::where('code_amval',$request->code1)->get();
        $group_kalas=Groupkala::all();
        $rooms=Room::all();
        if(empty($kalas)){
            return redirect()->back();
            
        }
        else
        {
            return view('kalalist',compact('kalas','group_kalas','rooms'));
        }
    }

    public function updatekala(Request $request)
    {


    }
}
