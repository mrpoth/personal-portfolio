@extends('_layouts.master')
@section('body')
@include('_partials.nav')
<div class="posts-container">
    @if($page->featured_image)
    <img class="posts-image" src="{{$page->featured_image}}">
    @endif
    <h1 class="text-center">{{ $page->title }}</h1>
    <p class="text-center">By {{ $page->author }}</p>
    <div class="posts-content">
            @yield('content')
    </div>
</div>
@endsection
@section('footer')

@include('_partials.main-footer')

@endsection
@push('scripts')
<script src="{{mix('js/main.js', 'assets/build')}}"></script>
@endpush