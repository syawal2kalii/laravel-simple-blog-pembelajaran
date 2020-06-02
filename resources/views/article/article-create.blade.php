@extends('base.base_html')
@section('title','Create Article');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <form action="{{route('article.store')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Article</h5>
                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input type="text" name="title" id="my-input" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="my-select">Category</label>
                                <select name="cat_id" id="my-select" class="form-control @error('cat_id') is-invalid @enderror">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nama}}</option>
                                    @endforeach
                                </select>
                                @error('cat_id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Content</label>
                                <textarea name="content" id="my-textarea" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror"
                                          placeholder="content"></textarea>
                                @error('content')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary">OK</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
