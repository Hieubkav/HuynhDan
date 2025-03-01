@extends('layouts.shop')

@section('content')
    @include('component.storeFront.hero')
    @include('component.storeFront.product')
    @include('component.storeFront.service')
    @include('component.storeFront.about')
    @include('component.storeFront.map')
    @include('component.storeFront.contact')
    @include('component.storeFront.thank')
@endsection
