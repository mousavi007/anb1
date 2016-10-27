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
                <h4> <strong> {{ $room->name()->semat}}   </strong></h4>
                <h4> <strong> {{ $room->name()->name}}   </strong></h4>
                <h4>  داخلی: <strong> {{ $room->dakheli}}   </strong></h4>
                <h4> نوع:  <strong> {{ $room->type}}   </strong></h4>

                <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal7" data-whatever="{{ $room->id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal6" data-whatever="" >حذف</a>
            </div>
        @endforeach

    </div>

    <div class="modal fade" id="login-modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ویرایش  گروه کالا</h1><br>
                <form action="{{ Route('updateroom') }}" method="post">
                    <label form="num">شماره اتاق</label>
                    <input type="text" name="num" id="num">
                    <label form="dakheli">داخلی</label>
                    <input type="text" name="dakheli" id="dakheli">
                    <label form="type">نوع اتاق</label>
                    <input type="text" name="type" id="type">
                    <label form="name_fard">سرپرست</label>
                    <select class="form-control" id="fard" name="fard">
                        @foreach($fards as $fard)
                        <option value="{{$fard->id}}">{{ $fard->name }}</option>
                            @endforeach
                    </select>

                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <input type="hidden" name="group_qabl" id="room_id">
                </form>

            </div>
        </div>
    </div>
@endsection