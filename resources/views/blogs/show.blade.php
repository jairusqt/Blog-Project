@extends('layouts.app')

@section('content')
      <div class="wrapper">
        <h2>{{$blog->title}}</h2>
          <p>{{$blog->content}}</p>
        <h3>-{{$blog->author}}</h3>
          <ul>
            @foreach($blog->headlines as $headline)
              <li>{{$headline}}</li>
            @endforeach

            <form action="/blogs/{{$blog->id}}" method="POST">

            @csrf
            @method('DELETE')
            <button>DELETE BLOG</button>
            </form>
          </ul>
      </div>
@endsection
