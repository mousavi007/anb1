@extends('layouts.master')
@section('title')
    Welcome!
@endsection
@section('header')

@endsection
@section('content')
    <div class="center" >
    <button type="button" id="myButton"  class=" btn btn-primary btn-lg btn-block" autocomplete="off" data-toggle="modal" data-target="#login-modal">
ورود
    </button>

        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ Route('signup') }}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''  }}">
                    <label form="username">UserName</label>
                    <input class="form-control" type="text" name="username" id="username" value="{{ Request::old('username') }}">
                </div>
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''  }}">
                    <label form="first_name">Your First name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''  }}">
                    <label form="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>شناسه و رمز عبور را وارد کنید</h1><br>
                    <form action="{{ Route('signin') }}" method="post">
                        <input type="text" name="username" placeholder="شناسه">
                        <input type="password" name="password" placeholder="رمز عبور">
                        <input type="submit" name="login" class="login loginmodal-submit" value="ورود">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>

                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection