@extends('layouts.master')

@section('title')
    افراد
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
<div class="container1">
    <h1>افراد</h1>
    @foreach($fards as $fard)
        <div class=" card"> <h3> <strong>{{ $fard->name }} </strong></h3> <h4> <strong>   {{ $fard->semat }}  </strong></h4><a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal5" data-whatever="{{ $fard->id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal6" data-whatever="{{ $fard->id }}" >حذف</a></div>
    @endforeach
    <div class="center" >
        <a href="#" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="modal" data-target="#login-modal4">جدید</a>
    </div>

    <div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1> فرد جدید</h1><br>
                <form action="{{ Route('addfard') }}" method="post">
                    <label form="name_fard">نام و نام خانوادگی</label>
                    <input align="right" type="text" name="name_fard" id="name_fard">
                    <label form="semat_fard">سمت</label>
                    <input align="right" type="text" name="semat_fard" id="semat_fard">
                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="login-modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>ویرایش  فرد</h1><br>
                <form action="{{ Route('updatefard') }}" method="post">
                    <input type="text" name="fard_name1" id="fard_name1">
                    <input type="text" name="fard_semat1" id="fard_semat1">
                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <input type="hidden" name="fard_qabl" id="fard_qabl">
                </form>up

            </div>
        </div>
    </div>

    <div class="modal fade" id="login-modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>آیا اطمینان دارید</h1><br>
                <form action="{{ Route('delfard') }}" method="post">
                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <input type="hidden" name="fard_id2" id="fard_id2">
                </form>

            </div>
        </div>
    </div>
</div>
@endsection