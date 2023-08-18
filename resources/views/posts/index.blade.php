@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Manage Posts</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Create Post</a>
                <table class="table table-bordered">
                    <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th>Auther Name</th>
                    <th>Content</th>
                    <th width="150px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->users->name }}</td>
                            <td>{{ \Illuminate\Support\Str::words($post->content, 50 )  }}</td>
                            <td>
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">View</a></br>


                                    @if(auth()->check() && auth()->user()->id == $post->user_id)
                                        <a class="btn btn-primary"
                                           href="{{ route('posts.edit',$post->id) }}">Edit</a></br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete Post</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
