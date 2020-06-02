@extends('base.base_html')
@section('title','Edit')
@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-body">
                <div class="card-title"><h1>Edit</h1></div>
                <form action="{{route('article.update',$article)}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input id="my-input" class="form-control @error('title') is-invalid @enderror" type="text" value="{{$article->title}}" name="title">
                                @error('title')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="my-select">Category</label>
                                <select id="my-select" class="form-control @error('cat_id') is-invalid @enderror" name="cat_id">
                                    @foreach ($category as $cat)
                                        <option value="{{$cat->id}}" {{$article->category == $cat->id ? 'selected="selected"':''}}>{{$cat->nama}}</option>
                                    @endforeach
                                    @error('cat_id')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Content</label>
                                <textarea name="content" class="form-control @error('content') @enderror" rows="5" placeholder="Desciption">{{$article->content}}</textarea>

                                @error('content')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-primary">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
