@extends('layout')

@section('content')
    

<h1>{{$heading}} </h1>

{{-- @if(count($listings)<1)
<h1>no listing</h1>
@endif --}}

@foreach($listings as $listing)




<a href="/single/{{$listing['id']}}" ><h2>{{$listing['title']}}</h2></a>

    <p>{{$listing['description']}}</p>
@endforeach
@endsection