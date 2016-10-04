@extends('layouts.master')
@section('title')
    Welcome!
@endsection
@section('header')
    @include('includes.header')
@endsection
@section('content')
<h1>گروه کالا</h1>
@foreach($groupkalas as $group)








    @foreach($posts as $post)




@endsection