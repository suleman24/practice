@extends('layout.masterlayout')

@section('content')
{{$name}}
{{!empty($age)? $age: 'No age'}}
@endsection

@section('title')
Post
@endsection