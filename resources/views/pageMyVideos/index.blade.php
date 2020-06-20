@extends('layouts.app')

@section('content')
    @include('templates.header')
    @include('pageMyVideos.MyVideos')
    @include('pageMyVideos.addVideoModal')
    @include('pageMyVideos.myModals')
    @include('pageMyVideos.addFilter')
@endsection