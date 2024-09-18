@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Contact Us Page Content</h1>

        <form action="{{ route('admin.contact.update', $contactContent->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="address_en">Address (EN)</label>
                <input type="text" name="address_en" class="form-control" value="{{ $contactContent->address_en }}">
            </div>

            <div class="form-group">
                <label for="address_ar">Address (AR)</label>
                <input type="text" name="address_ar" class="form-control" value="{{ $contactContent->address_ar }}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $contactContent->phone }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $contactContent->email }}">
            </div>

            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" value="{{ $contactContent->fax }}">
            </div>

            <div class="form-group">
                <label for="description_en">Description (EN)</label>
                <textarea name="description_en" class="form-control">{{ $contactContent->description_en }}</textarea>
            </div>

            <div class="form-group">
                <label for="description_ar">Description (AR)</label>
                <textarea name="description_ar" class="form-control">{{ $contactContent->description_ar }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Contact Page Image</label>
                <input type="file" name="image" class="form-control">
                @if($contactContent->image)
                    <img src="{{ asset('storage/' . $contactContent->image) }}" alt="Contact Image" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
