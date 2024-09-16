@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Home Page Content</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Display current homepage content -->
    <div class="content-section">
        <h3>Banner 1</h3>
        <p><strong>Title:</strong> {{ $content->banner_title_1 }}</p>
        <p><strong>Text:</strong> {{ $content->banner_text_1 }}</p>
        @if($content->banner_image_1)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $content->banner_image_1) }}" alt="Banner Image 1" width="200">
        @endif
    </div>

    <div class="content-section">
        <h3>Banner 2</h3>
        <p><strong>Title:</strong> {{ $content->banner_title_2 }}</p>
        <p><strong>Text:</strong> {{ $content->banner_text_2 }}</p>
        @if($content->banner_image_2)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $content->banner_image_2) }}" alt="Banner Image 2" width="200">
        @endif
    </div>

    <div class="content-section">
        <h3>About Us Section :</h3>
        <h2 class="section-title">Title :  {{ $content->section_title }}</h2> <!-- Editable section title -->

        <p><strong>Text:</strong> {{ $content->about_us_text }}</p>
        @if($content->about_us_image)
            <p><strong>Image:</strong></p>
            <img src="{{ asset('storage/' . $content->about_us_image) }}" alt="About Us Image" width="200">
        @endif
    </div>

    <div class="content-section">
        <h3>Vision Section</h3>
        <p><strong>Text:</strong> {{ $content->vision_text }}</p>
    </div>

    <!-- Edit Button -->
    <a href="{{ route('admin.homePage.edit') }}" class="btn btn-primary">Edit Home Page Content</a>
</div>
@endsection
