
@php
    $var = 'suleman';
    $arr = [];

@endphp

@include('pages.header',['name' => 'Suleman Anwar'])

{!! "<h1> $var </h1>" !!}



@include('pages.footer',['arr' => $arr])

@includeWhen(true,'pages.header',['name' => 'True'])
@includeWhen(false,'pages.header',['name' => 'False'])
@includeWhen(5==2,'pages.header',['name' => '5==2'])
@includeWhen(5==5,'pages.header',['name' => '5==5'])





