@extends('layout.masterlayout')

@section('content')

<h4>{{$user['name']}}</h4>
<h4>{{$user['age']}}</h4>
<h4>{{$user['city']}}</h4>

@endsection