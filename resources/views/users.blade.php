@extends('layout.masterlayout')

@section('content')

    @foreach ($users as $id => $u)
        <h4 style="color: black">{{ $u->name }}
        </h4>
        <a href="{{route('view.user',$u->id)}}">Details</a>
    @endforeach
