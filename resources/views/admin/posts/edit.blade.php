@extends('layouts.app')

@section('content')
<form class="w-25 m-auto" action="{{ route('admin.posts.update', $post->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title', $post->title) }}">
    </div>

    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="content" name="content" placeholder="Content" cols="50" rows="5">
        {{ old('content', $post->content) }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="text" class="form-control" id="image" name="image" placeholder="Url image" value="{{ old('image', $post->image) }}">
    </div>

    <div class="form-group">
      <label for="firm">Firm</label>
      <input type="text" class="form-control" id="firm" name="firm" placeholder="Firm" value="{{ old('firm', $post->firm) }}">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>

</form>
@endsection