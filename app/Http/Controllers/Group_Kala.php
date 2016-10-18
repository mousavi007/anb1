<?php
namespace App\Http\Controllers;
use App\Groupkala;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class Group_Kala extends Controller
{
    public function manage(){

        $groupkalas=Groupkala::all();
        return view('groupkala',['groupkalas' => $groupkalas]);
    }
    public function updategroup(Request $request){
        $group=Groupkala::where('group',$request->group_qabl)->first();
        $group->group=$request->groupbodys;
        $group->save();
        return redirect()->back();
    }
    public function addgroup(Request $request){
        $group=new Groupkala();
        $group->group=$request->groupname;
        $group->save();
        return redirect()->back();
    }
    public function delgroup(Request $request){
        $id=$request->group_id;
        $group=Groupkala::where('id',$id);
        $group->delete();
        return redirect()->back();
    }
}