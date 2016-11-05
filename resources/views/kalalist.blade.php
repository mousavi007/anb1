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
        <script type="text/javascript"> </script>
        @foreach($kalas as $kala)
            <div class=" card"> <h3>  نام کالا <strong> {{ $kala->name }} <script type="text/javascript"> var name1= '{{ $kala->name }}';  </script> </strong></h3>
                <h4>کد اموال:  <strong> {{ $kala->code_amval}} <script type="text/javascript"> var code1= '{{ $kala->code_amval }}';  </script>  </strong></h4>
                <h4>مالک: <strong> {{ $kala->roomname()->name()->name}}<script type="text/javascript"> var malek1='{{ $kala->roomname()->name()->name }}' ; </script>   </strong></h4>
                <h4>شماره اتاق: <strong> {{ $kala->roomname()->num}} <script type="text/javascript"> var room1= '{{ $kala->roomname()->num }}'  ;</script>  </strong></h4>
                <h4>  داخلی: <strong> {{ $kala->roomname()->dakheli}} <script type="text/javascript"> var dakheli1= '{{ $kala->roomname()->dakheli }}'  ;</script>  </strong></h4>
                <h4> نوع:  <strong> {{ $kala->roomname()->type}} <script type="text/javascript"> var type1 = '{{ $kala->roomname()->type }}' ; </script>  </strong></h4>

                <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal11" data-whatever="ali">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal12" data-whatever="reza" >حذف</a>
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="login-modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ویرایش کالا</h1><br>
                <form action="{{ Route('updatekala') }}" method="post">
                    <label form="name2">نام کالا</label>
                    <input type="text" name="name2" id="name2">
                    <label form="group_kala">گروه کالا</label>
                    <select class="form-control" id="group_kala" name="group_kala">
                        @foreach($group_kalas as $group_kala)
                            <option value="{{$group_kala->id}}">{{ $group_kala->group }}</option>
                        @endforeach
                    </select>
                    <label form="room">شماره اتاق</label>
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