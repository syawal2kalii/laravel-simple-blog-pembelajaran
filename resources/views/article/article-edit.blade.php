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
                                <input id="my-input" class="form-control" type="text" value="{{$article->title}}" name="title">
                            </div>
                            <div class="form-group">
                                <label for="my-select">Category</label>
                                <select id="my-select" class="form-control" name="category">
                                    @foreach ($category as $cat)
                                        <option value="{{$cat->id}}" {{$article->category == $cat->id ? 'selected="selected"':''}}>{{$cat->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Content</label>
                                <textarea name="content" class="form-control" rows="5" placeholder="Desciption">{{$article->content}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
