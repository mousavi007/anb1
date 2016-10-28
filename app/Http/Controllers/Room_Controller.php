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
        $room->num=$request->num;
        $room->dakheli=$request->dakheli;
        $room->type=$request->type;
        $room->fards_id=$fard->id;
        $room->save();
        return redirect()->back();
    }
}