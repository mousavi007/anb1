@extends('layouts.master')

@section('title')
    افراد
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
<div class="container">
    <h1>افراد</h1>
    @foreach($fards as $fard)
        <div class="well wellright well-sm card"> <h3> <strong>{{ $fard->name }} </strong></h3> <h4> <strong>   {{ $fard->semat }}  </strong></h4><a id="myButton" href="#" class="btn btn-warning" role="button" autocomplete="off" data-toggle="modal" data-target="#login-modal1" data-whatever="{{ $fard->id }}">ویرایش</a> <a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#login-modal3" data-whatever="{{ $fard->id }}" >حذف</a></div>
    @endforeach
</div>
@endsection