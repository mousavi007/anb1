@extends('layouts.master')
@section('title')
    Welcome!
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
    <div class="container">
<h1>گروه کالا</h1>
@foreach($groupkalas as $group)
    <div class="well wellright well-sm"> <h3> <strong>{{ $group->group }} </strong></h3> <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal1" data-whatever="{{ $group->group }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button">حذف</a></div>
    @endforeach
        <div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>ویرایش گروه کالا</h1><br>
                    <form action="{{ Route('updategroup') }}" method="post">
                        <input type="text" name="groupbodys" id="groupbody">
                        <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="group_qabl" id="group_qabl">
                    </form>

                </div>
            </div>
        </div>
</div>
@endsection