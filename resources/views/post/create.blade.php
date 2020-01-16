@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form action="/posts" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                                <small id="titleHelp" class="form-text text-muted">Insert a title for post.</small>
                                @error('title')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea rows="3" name="content"  class="form-control" id="content" placeholder="Enter post content"></textarea>
                                @error('content')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
