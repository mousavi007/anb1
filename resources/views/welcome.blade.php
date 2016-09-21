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

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>شناسه و رمز عبور را وارد کنید</h1><br>
                    <form>
                        <input type="text" name="user" placeholder="شناسه">
                        <input type="password" name="pass" placeholder="رمز عبور">
                        <input type="submit" name="login" class="login loginmodal-submit" value="ورود">
                    </form>

                    <div class="login-help">
                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection