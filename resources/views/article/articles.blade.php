@extends('base.base_html')
@section('title','Article')
@section('content')
    <div class="container">
        <div class="row justify-content-start">
            @foreach($articles as $article)
                <div class="col-md4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <h6 class="card-subtitle mb-2">{{$article->created_at->diffForHumans()}}</h6>
                            <p class="card-text">{{$article->content}}</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
