@extends('layouts.master')
@section('title')
    Welcome!
@endsection
@section('header')
    @include('includes.header')
@endsection

@section('content')
    {{ $dates }}
@endsection