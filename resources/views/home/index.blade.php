@extends('layouts.homeLayout', ['title' => ' home'])
@section('head')
    
@endsection
@section('content')
    @include('home.inc.spinner')
    @include('../../inc.mainNavbar')
    @include('home.inc.modalearch')
    @include('home.inc.fruitsshop')
    @include('home.inc.factstart')
    @include('home.inc.bestsalerpoduct')
    @include('home.inc.bannersection')
    @include('home.inc.tastimonial')
@endsection
