@extends('master')

@section('title')
    Blog Page
@endsection

@section('body')
    <h1>{{$aminur}}</h1>
    <h1>{{$joy}}</h1>
    <h1>{{ $email }}</h1>

    @foreach ($rajon as $key=> $any_name)
        @foreach ($any_name as $item)
            <span>{{ $item }}</span><br/>
        @endforeach
        
    @endforeach
    
@endsection