@extends('master')

@section('main_content')

        <h1 class=" col-7">Medium</h1>
        <a href="{{route('article.create')}}" class=" btn btn-default btn-outline-primary">Create an Article</a>
        <a href="{{url('/')}}" class=" btn btn-default btn-outline-primary">Back to Front Page</a>

        <hr>
    @if (count($articles) > 0)
    @foreach ($articles as $judul)
        <div class="well">
            <h3><a href="/artikel/{{$judul->id}}">{{$judul->judul}}</a></h3>
            <p>Content: {{Str::limit($judul->isi_artikel, 50)}} <span class=" text-success"> click title for detail</span></p>
            <small>Written at {{$judul->created_at}}</small>
            &emsp;
            <small>Updated at {{$judul->updated_at}}</small><br>
            <small>slug : </small>
            <small class=" pr-1 pl-1 text-light ", style="background-color: rgb(0, 128, 49)">{{$judul->slug}}</small><br>
            <small>tag : </small>
            @foreach (explode(' ', $judul->tag) as $item)
    
            <small class="pr-1 pl-1 text-light", , style="background-color: rgb(0, 128, 49)">{{$item}}</small>    
            @endforeach
            
            <hr>
        </div>
    @endforeach

    @else
        <h4>No Article Yet</h4>
    @endif

@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush