<?php
namespace App\Http\Controllers;
use App\Groupkala;
use App\Room;
use App\Fard;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
class Room_Controller extends Controller
{
    public function manage(){
        $rooms=Room::all();
        $fards=Fard::all();
        return view('room',compact('rooms','fards'));
    }

    public function updateroom(Request $request){
        $fard=Fard::where('name',$request->fard)->first();
        $room=Room::where('id',$request->room_id)->first();
        $room_temp=Room::where('num',$request->num)->first();
        if(empty($room_temp) or $room->num==$request->num){
        $room->num=$request->num;
        $room->dakheli=$request->dakheli;
        $room->type=$request->type;
        $room->fards_id=$fard->id;
        $room->save();
        }
        else{

        }
        return redirect()->back();
    }

    public function addroom(Request $request){

        $room=Room::where('num',$request->num)->first();
        if(empty($room)){
            $room1= new Room();
            $room1->num=$request->num;
            $room1->dakheli=$request->dakheli;
            $room1->type=$request->type;
            $room1->fards_id=$request->fard;
            $room1->save();
        }
        else
        {

        }

        return redirect()->back();
    }

    public function delroom(Request $request){
        /*بعدا تکمیل شود
        */
    }
}