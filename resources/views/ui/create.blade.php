@extends('master')

@section('main_content')
    <h1>Create an Article</h1>
    {!! Form::open(['action'=> 'ArticleController@store', 'method' => 'POST']) !!}
    <div class=" container-fluid">
        <div class="form-group">
            {{Form::label('judul', 'Judul')}}
            {{Form::text('judul', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'title'])}}
            {{Form::label('tag', 'tag')}}
            {{Form::text('tag', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'separate with space (ex: php laravel)'])}}
        </div>
        <div class="form-group">
            {{Form::label('judul', 'Judul')}}
            {{Form::textarea('isi_artikel', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'isi artikel'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    
    
{!! Form::close() !!}
@endsection