<h1>Footer</h1>
@foreach ($arr as $a => $value)
@if ($loop->first)
<li style="color: blue">{{$a}} - {{$value}}</li>
@elseif ($loop->iteration==3)
<li style="color: red">{{$a}} - {{$value}}</li>
@else
<li style="color: black">{{$a}} - {{$value}}</li>
@endif
@endforeach