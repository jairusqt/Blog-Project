@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new blog</h1>
        <form action="/blogs" method="POST">
            @csrf
            <label for="title">Title: </label>
            <input type="text" id="title" name="title">
            <label for="content">Content: </label>
            <textarea name="content" id="content" cols="20" rows="10"></textarea>
            <label for="author">Author: </label>
            <input type="text" id="author" name="author">
            <fieldset>
                <label>Headlines:  </label>
                <input type="checkbox" name="headlines[]" value="THE POTATO NEWS"><br>
                <input type="checkbox" name="headlines[]" value="NEWS HEADLINES"><br>
                <input type="checkbox" name="headlines[]" value="GARLIC POTATO"><br>
                <input type="checkbox" name="headlines[]" value="OH LALA BONITA"><br>
            </fieldset>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
