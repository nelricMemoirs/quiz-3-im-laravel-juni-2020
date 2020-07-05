@extends('master')

@section('main_content')
<a href="/artikel" class="btn btn-outline-secondary">Back</a>
<h1 class=" col-7">{{$article->judul}}</h1>
<small>Written by {{$article->created_at}}</small>
&emsp;
<small>Updated at {{$article->updated_at}}</small><br>
<small>slug : </small>
<small class=" pr-2 pl-2 text-light ", style="background-color: rgb(0, 128, 49)">{{$article->slug}}</small><br>
<small>tag : </small>

@foreach (explode(' ', $article->tag) as $item)
    
<small class=" pr-1 pl-1 text-light ", style="background-color: rgb(0, 128, 49)">{{$item}}</small>
    
@endforeach
<hr>
    <div>
        {{$article->isi_artikel}}
    </div>
    <hr>
    <a href="/artikel/{{$article->id}}/edit" class=" btn btn-default btn-outline-primary">Edit Article</a>

    {!! Form::open(['action'=> ['ArticleController@destroy', $article->id], 'method'=> 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}

@endsection