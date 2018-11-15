@extends('tampilan.parent')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@stop


@section('content')
    @include('tampilan.nah')
@stop