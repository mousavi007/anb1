@extends('layouts.master')

@section('title')
    اتاق
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="container">
        <h1>اتاقها</h1>
        @foreach($rooms as $room)
            <div class=" card"> <h3> <strong>{{ $room->num }} </strong></h3>
                 @foreach ($room->fard as $fard)
                    <h4> <strong>  {{ $fard->name }}</strong></h4>
                        @endforeach
                <h4> <strong>    </strong></h4><a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal5" data-whatever="">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal6" data-whatever="" >حذف</a>
            </div>
        @endforeach

    </div>

@endsection