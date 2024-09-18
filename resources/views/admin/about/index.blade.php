@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>About Us Page Content</h1>

        @if($aboutContent)
            <div class="content-section">
                <h3>Banner Image</h3>
                @if($aboutContent->banner_image)
                    <img src="{{ asset('storage/' . $aboutContent->banner_image) }}" alt="Banner Image" width="200">
                @endif
            </div>

            <div class="content-section">
                <h3>About Us Image</h3>
                @if($aboutContent->about_image)
                    <img src="{{ asset('storage/' . $aboutContent->about_image) }}" alt="About Us Image" width="200">
                @endif
            </div>

            <div class="content-section">
                <h3>About Us Title (EN):</h3>
                <p>{{ $aboutContent->title_en }}</p>
            </div>

            <div class="content-section">
                <h3>About Us Title (AR):</h3>
                <p>{{ $aboutContent->title_ar }}</p>
            </div>

            <div class="content-section">
                <h3>About Us Description (EN):</h3>
                <p>{{ $aboutContent->description_en }}</p>
            </div>

            <div class="content-section">
                <h3>About Us Description (AR):</h3>
                <p>{{ $aboutContent->description_ar }}</p>
            </div>

            <a href="{{ route('admin.about.edit', $aboutContent->id) }}" class="btn btn-primary">Edit Content</a>
        @else
            <p>No content available. Please create it first.</p>
        @endif
    </div>
@endsection
