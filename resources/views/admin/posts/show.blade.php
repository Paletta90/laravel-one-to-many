@extends('layouts.app')

@section('content')
<div class="card w-50 m-auto">
    <div class="card-body">
        <h5 class="card-title">{{ $post -> title }}</h5>
        <p class="card-text">{{ $post -> content }}</p>
        <p class="font-italic">{{ $post -> firm }}</p>
        <a href="" class="btn btn-danger">Delete</a>
    </div>
</div>
@endsection
