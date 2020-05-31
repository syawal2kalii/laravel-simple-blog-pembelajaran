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
                                <input type="text" name="title" id="my-input" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="my-select">Category</label>
                                <select name="category" id="my-select" class="form-control">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Content</label>
                                <textarea name="contentt" id="my-textarea" cols="30" rows="10" class="form-control"
                                          placeholder="content"></textarea>
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
