@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

            @if ($post->image)
            <div style="max-height: 400px; overflow:hidden;">
                
                <img src="{{ asset('storage/' . $post->image)}}" alt="" class="img-fluid mb-3">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="" class="img-fluid mb-3">
            @endif
            
            <p>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span>Delete</button>
                  </form>
               
            
            </p>
            <p>
                {!! $post->body !!}
            </p>
            
        </div>
    </div>
</div>

@endsection