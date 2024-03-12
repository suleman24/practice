
@php
    $var = 'suleman';
    $arr = [];

@endphp

@include('pages.header',['name' => 'Suleman Anwar'])

{!! "<h1> $var </h1>" !!}



@include('pages.footer',['arr' => $arr])

