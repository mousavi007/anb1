<?php
namespace App\Http\Controllers;
use App\Groupkala;
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

    }
}
