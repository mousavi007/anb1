<?php
namespace App\Http\Controllers;
use App\Groupkala;
use App\Room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
class Room_Controller extends Controller
{
    public function manage(){
        $rooms=Room::all();
        $fards=$rooms->fard();
        return view('room',['fards' => $fards]);
    }
}