@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Edit About Us Page Content</h1>

        <form action="{{ route('admin.about.update', $aboutContent->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title and Description (EN) -->
            <div class="form-group">
                <label for="title_en">Title (EN)</label>
                <input type="text" name="title_en" class="form-control" value="{{ $aboutContent->title_en }}">
            </div>

            <div class="form-group">
                <label for="description_en">Description (EN)</label>
                <textarea name="description_en" class="form-control">{{ $aboutContent->description_en }}</textarea>
            </div>

            <!-- Title and Description (AR) -->
            <div class="form-group">
                <label for="title_ar">Title (AR)</label>
                <input type="text" name="title_ar" class="form-control" value="{{ $aboutContent->title_ar }}">
            </div>

            <div class="form-group">
                <label for="description_ar">Description (AR)</label>
                <textarea name="description_ar" class="form-control">{{ $aboutContent->description_ar }}</textarea>
            </div>

            <!-- Banner Image -->
            <div class="form-group">
                <label for="banner_image">Banner Image</label>
                <input type="file" name="banner_image" class="form-control">
                @if($aboutContent->banner_image)
                    <img src="{{ asset('storage/' . $aboutContent->banner_image) }}" alt="Banner Image" width="100">
                @endif
            </div>

            <!-- About Us Image -->
            <div class="form-group">
                <label for="about_image">About Us Image</label>
                <input type="file" name="about_image" class="form-control">
                @if($aboutContent->about_image)
                    <img src="{{ asset('storage/' . $aboutContent->about_image) }}" alt="About Us Image" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
