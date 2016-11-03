@extends('layouts.master')

@section('title')
    کالا
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="container">
        <h1>لیست کالا</h1>
        @foreach($kalas as $kala)
            <div class=" card"> <h3>  نام کالا <strong> {{ $kala->name }} </strong></h3>
                <h4>کد اموال:  <strong> {{ $kala->code_amval}}   </strong></h4>
                <h4>مالک: <strong> {{ $kala->roomname()->name()->name}}   </strong></h4>
                <h4>شماره اتاق: <strong> {{ $kala->roomname()->num}}   </strong></h4>
                <h4>  داخلی: <strong> {{ $kala->roomname()->dakheli}}   </strong></h4>
                <h4> نوع:  <strong> {{ $kala->roomname()->type}}   </strong></h4>

                <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal7" data-whatever="{{ $room->id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal6" data-whatever="" >حذف</a>
            </div>
        @endforeach
    </div>
@endsection