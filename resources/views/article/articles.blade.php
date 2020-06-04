@extends('base.base_html')
@section('title','Article')
@section('content')
    <div class="container">
        @if(session()->has('notification'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session()->get('notification')}}</strong>
            </div>
        @endif
        <div class="row justify-content-start">
            @foreach($articles as $article)
                <div class="col-md-4 mt-2 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <h6 class="card-subtitle mb-2">{{$article->created_at->diffForHumans()." By ".$article->user->name}}</h6>
                            <p class="card-text">{{$article->content}}</p>
                            <a href="{{route('article.detail',$article)}}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            {{$articles->links()}}
    </div>

@endsection
