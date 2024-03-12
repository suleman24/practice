
@php
    $var = 'suleman';
    $arr = ['one'=> 'hi','two'=> 'hey','three'=> 'hello'];

@endphp

@include('pages.header',['name' => 'Suleman Anwar'])

{!! "<h1> $var </h1>" !!}



@include('pages.footer',['arr' => $arr])
