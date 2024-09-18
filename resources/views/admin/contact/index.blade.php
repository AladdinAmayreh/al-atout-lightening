@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Contact Us Page Content</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Display current contact page content -->
    @if($contactContent)
        <!-- Address Information -->
        <div class="content-section">
            <h3>Address Information</h3>
            @if($contactContent->address_en)
                <p><strong>Address (EN):</strong> {{ $contactContent->address_en }}</p>
            @endif
            @if($contactContent->address_ar)
                <p><strong>Address (AR):</strong> {{ $contactContent->address_ar }}</p>
            @endif
        </div>

        <!-- Contact Details -->
        <div class="content-section">
            <h3>Contact Details</h3>
            @if($contactContent->phone)
                <p><strong>Phone:</strong> {{ $contactContent->phone }}</p>
            @endif
            @if($contactContent->email)
                <p><strong>Email:</strong> {{ $contactContent->email }}</p>
            @endif
            @if($contactContent->fax)
                <p><strong>Fax:</strong> {{ $contactContent->fax }}</p>
            @endif
        </div>

        <!-- Additional Information -->
        <div class="content-section">
            <h3>Additional Information</h3>
            @if($contactContent->description_en)
                <p><strong>Description (EN):</strong> {{ $contactContent->description_en }}</p>
            @endif
            @if($contactContent->description_ar)
                <p><strong>Description (AR):</strong> {{ $contactContent->description_ar }}</p>
            @endif
        </div>

        <!-- Contact Image -->
        @if($contactContent->image)
            <div class="content-section">
                <h3>Contact Page Image</h3>
                <img src="{{ asset('storage/' . $contactContent->image) }}" alt="Contact Us Image" width="200">
            </div>
        @endif

        <!-- Edit Button -->
        <a href="{{ route('admin.contact.edit', $contactContent->id) }}" class="btn btn-primary">Edit Contact Us Content</a>
    @else
        <p>No content available. Please create it first.</p>
    @endif
</div>
@endsection
