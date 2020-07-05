@extends('master')

@section('main_content')

<div class="container ml-1">
    <h1>Quis 3 Laravel</h1>
<a href="{{ url('artikel') }}" class=" btn btn-primary p-3 m-4">Browse Articles</a>
<img src="{{asset('images/ERD.png')}}" alt="">
</div>

@endsection