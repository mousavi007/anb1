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
        <div class=" card"> <h3> <strong>{{ $fard->name }} </strong></h3> <h4> <strong>   {{ $fard->semat }}  </strong></h4><a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal1" data-whatever="{{ $fard->id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal3" data-whatever="{{ $fard->id }}" >حذف</a></div>
    @endforeach
    <div class="center" >
        <a href="#" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="modal" data-target="#login-modal4">جدید</a>
    </div>

    <div class="modal fade" id="login-modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1> فرد جدید</h1><br>
                <form action="{{ Route('addfard') }}" method="post">
                    <input type="text" name="name_fard" id="name_fard">
                    <input type="text" name="semat_fard" id="semat_fard">
                    <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>

            </div>
        </div>
    </div>

</div>
@endsection