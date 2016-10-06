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
    <div class="well wellright well-sm"> <h3> <strong>{{ $group->group }} </strong></h3> <a href="#" class="btn btn-warning" role="button">ویرایش</a> <a href="#" class="btn btn-danger" role="button">حذف</a></div>

    @endforeach

</div>
@endsection