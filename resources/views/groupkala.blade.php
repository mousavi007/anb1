@extends('layouts.master')
@section('title')
   گروه کالا
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
    <div class="container1">
<h1>گروه کالا</h1>
@foreach($groupkalas as $group)
    <div class="card "> <h3> <strong>{{ $group->group }} </strong></h3> <a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal1" data-whatever="{{ $group->group }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal3" data-whatever="{{ $group->id }}" >حذف</a></div>
    @endforeach
        <div class="center" >
        <a href="#" class="btn btn-primary btn-lg btn-block" role="button" data-toggle="modal" data-target="#login-modal2">جدید</a>
            </div>
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

        <div class="modal fade" id="login-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1> گروه کالای جدید</h1><br>
                    <form action="{{ Route('addgroup') }}" method="post">
                        <input type="text" name="groupname" id="groupname">
                        <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="login-modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>آیا اطمینان دارید</h1><br>
                    <form action="{{ Route('delgroup') }}" method="post">
                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                        <input type="submit" name="submit" class="login loginmodal-submit" value="ثبت">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="group_id" id="group_id1">
                    </form>

                </div>
            </div>
        </div>
</div>
@endsection