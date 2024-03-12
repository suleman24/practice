
@php
    $var = 'suleman';
    $arr = ['hi','hey','hello'];

@endphp

{!! "<h1> $var </h1>" !!}

@foreach ($arr as $a)
@if ($loop->first)
<li style="color: blue">{{$a}}</li>
@elseif ($loop->iteration==3)
<li style="color: red">{{$a}}</li>
@else
<li style="color: black">{{$a}}</li>
@endif
@endforeach