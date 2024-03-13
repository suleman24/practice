@extends('layout.masterlayout')

@section('content')

@if (count($users) > 0)
    @foreach ($users as $id => $u)
        <h4 style="color: black">{{ $u['name'] }} ... {{ $u['age'] }} ... {{ $u['city'] }}
        <a href="{{route('view.user',$id)}}">Show</a>
        </h4>
    @endforeach
@else
    <p>No users found.</p>
@endif

@endsection