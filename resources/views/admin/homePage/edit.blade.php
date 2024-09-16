@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Edit Home Page Content</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.homePage.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Banner 1 Content -->
        <div class="form-group">
            <label for="banner_title_1">Banner Title 1</label>
            <input type="text" name="banner_title_1" class="form-control" value="{{ $content->banner_title_1 }}">
        </div>

        <div class="form-group">
            <label for="banner_text_1">Banner Text 1</label>
            <textarea name="banner_text_1" class="form-control">{{ $content->banner_text_1 }}</textarea>
        </div>

        <div class="form-group">
            <label for="banner_image_1">Banner Image 1</label>
            <input type="file" name="banner_image_1" class="form-control">
            @if($content->banner_image_1)
                <img src="{{ asset('storage/' . $content->banner_image_1) }}" alt="Banner Image 1" width="100">
            @endif
        </div>

        <!-- Banner 2 Content -->
        <div class="form-group">
            <label for="banner_title_2">Banner Title 2</label>
            <input type="text" name="banner_title_2" class="form-control" value="{{ $content->banner_title_2 }}">
        </div>

        <div class="form-group">
            <label for="banner_text_2">Banner Text 2</label>
            <textarea name="banner_text_2" class="form-control">{{ $content->banner_text_2 }}</textarea>
        </div>

        <div class="form-group">
            <label for="banner_image_2">Banner Image 2</label>
            <input type="file" name="banner_image_2" class="form-control">
            @if($content->banner_image_2)
                <img src="{{ asset('storage/' . $content->banner_image_2) }}" alt="Banner Image 2" width="100">
            @endif
        </div>

        <!-- About Us Content -->
        <div class="form-group">
            <label for="section_title">Section Title</label>
            <input type="text" name="section_title" class="form-control" value="{{ $content->section_title }}">
        </div>
        <div class="form-group">
            <label for="about_us_text">About Us Text</label>
            <textarea name="about_us_text" class="form-control">{{ $content->about_us_text }}</textarea>
        </div>

        <div class="form-group">
            <label for="about_us_image">About Us Image</label>
            <input type="file" name="about_us_image" class="form-control">
            @if($content->about_us_image)
                <img src="{{ asset('storage/' . $content->about_us_image) }}" alt="About Us Image" width="100">
            @endif
        </div>

        <!-- Vision Section Content -->
        <div class="form-group">
            <label for="vision_text">Vision Text</label>
            <textarea name="vision_text" class="form-control">{{ $content->vision_text }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
