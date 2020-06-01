@extends('_layouts.master')
@section('body')
@include('_partials.nav')

{{-- <p>Total of {{ $posts->count() }} posts</p> --}}
<div class="blog-container">
@foreach ($posts as $post)
<div class="single-post">
        <a href="<?php echo $post->getPath()?>">
<img class="featured-image" src="{{$post->featured_image}}">
<div class="posts-title">{{ $post->title }}</a></div>
<div class="posts-excerpt">{{$post->excerpt}}</div>
</div>
@endforeach
</div>
@endsection
@section('footer')
@push('scripts')
<script src="{{mix('js/main.js', 'assets/build')}}"></script>
@endpush
@include('_partials.main-footer')

@endsection
