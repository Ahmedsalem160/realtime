@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <!-- Card Posts-->
                @if(isset($posts) &&  count($posts)>0)
                    @foreach($posts as $post)
                            <div class="row row-cols-1">
                                <div class="col-12 mb-4">
                                    <div class="card">
                                        <h4>{{$post->user->name}}</h4>
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title">{{$post->title}}</h3>
                                            <p class="card-text">{{$post->body}}</p>
                                        </div>
                                        <div class="card-footer"><h4>here comments</h4>

                                        @if(isset($post->comments) && count($post->comments)>0)
                                            @foreach($post->comments as $comment)
                                                <p class="card-text">{{$comment->comment}}</p>
                                            @endforeach
                                        @endif
                                        </div>
                                        <!-- form -->
                                        <form method="POST" action="{{route('comment.save')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{$post -> id}}">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="post_comment">
                                            </div>

                                            @if(Auth::id() != $post -> user -> id)<!-- just friends -->
                                                <button type="submit" class="btn btn-primary">Add Comment</button>
                                            @endif
                                        </form>
                                        <!--End form-->
                                    </div>
                                </div>

                            </div>
                    @endforeach
                @endif
                <!-- Card Posts-->

            </div>
        </div>
    </div>
</div>
@endsection
