@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">
                        <p>{{$post->content}}</p>
                    </div>
                    <div class="card-header">Comments</div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="comment">Content</label>
                                <textarea rows="3" name="comment"  class="form-control" id="coment" placeholder="Enter a comment"></textarea>
                                @error('comment')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Insert Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
