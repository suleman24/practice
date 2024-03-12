<h1>Footer</h1>
@forelse ($arr as $a => $value)
    
<li>{{$a}} - {{$value}}</li>

@empty
  <li>No Data</li>  
@endforelse 
