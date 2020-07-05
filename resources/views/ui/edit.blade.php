@extends('master')

@section('main_content')
    <h1>Edit Article</h1>
    {!! Form::open(['action'=> ['ArticleController@update', $article->id], 'method' => 'POST']) !!}
    <div class=" container-fluid">
        <div class="form-group">
            {{Form::label('judul', 'Judul')}}
            {{Form::text('judul', $article->judul,['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'title'])}}
            {{Form::label('tag', 'tag')}}
            {{Form::text('tag', $article->tag,['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'input tag for this article'])}}
        </div>
        <div class="form-group">
            {{Form::label('judul', 'Judul')}}
            {{Form::textarea('isi_artikel', $article->isi_artikel,['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'isi artikel'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    
    
{!! Form::close() !!}
@endsection