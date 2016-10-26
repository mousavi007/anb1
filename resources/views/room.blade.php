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
            <div class=" card"> <h3>  شماره اتاق: <strong> {{ $room->num }} </strong></h3>
                <h4>  داخلی: <strong> {{ $room->dakheli}}   </strong></h4>
                <h4> نوع:  <strong> {{ $room->type}}   </strong></h4>
                <h4> <strong> {{ $room->name()->semat}}   </strong></h4>
                <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal5" data-whatever="{{ $room->fards_id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal6" data-whatever="" >حذف</a>
            </div>
        @endforeach

    </div>

@endsection