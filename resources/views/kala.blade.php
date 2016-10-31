@extends('layouts.master')

@section('title')
    کالا
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="container">
        <div class="center" >
            <a href="#" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="modal" data-target="#login-modal9">جدید</a>
            <a href="#" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="modal" data-target="#login-modal10">جست و جو</a>
        </div>

    </div>


    <div class="modal fade" id="login-modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>کالای جدید</h1><br>
                <form action="{{ Route('addkala') }}" method="post">
                    <label form="num">نام کالا</label>
                    <input type="text" name="name" id="name">
                    <label form="name_fard">گروه کالا</label>
                    <select class="form-control" id="group_kala" name="group_kala">
                        @foreach($group_kalas as $group_kala)
                            <option value="{{$group_kala->id}}">{{ $group_kala->group }}</option>
                        @endforeach
                    </select>
                    <label form="num">شماره اتاق</label>
                    <select class="form-control" id="room" name="room">
                        @foreach($rooms as $room)
                            <option value="{{$room->id}}">{{ $room->num}}</option>
                        @endforeach
                    </select>
                    <label form="num">کد اموال</label>
                    <input type="text" name="code" id="code">
                    <label form="dakheli">کمپانی</label>
                    <input type="text" name="company" id="company">
                    <label form="type">مدل</label>
                    <input type="text" name="model" id="model">



                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </div>
@endsection