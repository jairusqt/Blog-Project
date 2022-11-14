@extends('layouts.app')

@section('content')
        <div class="flex items-top bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl sm:px-6 lg:px-8">
                <div class="content">
                  <h2>BLOGS</h2>
                </div>
                @foreach($blogs as $blog)
                    <div>
                        {{ $blog->title }} - {{ $blog->content }} - {{ $blog->author }}

                        <ul>
                            @foreach($blog->headlines as $headline)
                                <li>{{$headline}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
