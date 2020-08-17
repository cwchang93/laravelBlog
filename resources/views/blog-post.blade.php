

@extends('layout')
<!-- 直接傳tag => 用{!! $welcome !!} -->
@section('content')
    {!! $welcome  !!} {{ $data['title'] }}
@endsection
