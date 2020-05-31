@extends('base.base_html')
@section('title','detail')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>{{$article->title}}</h1>
                <span>{{$article->content}}</span> <br><br>
                <a href="{{route('article.destroy',$article->slug)}}" class="btn btn-outline-warning" type="button">Delete</a>
                <a href="{{route('article.edit',$article)}}" class="btn btn-outline-primary" type="button">Edit</a>
            </div>
        </div>
    </div>
@endsection
