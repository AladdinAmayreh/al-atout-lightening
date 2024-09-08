@extends('layouts.master')

@section('title', __('Product Details'))

@section('content')
<div class="container">
    <h1>{{ app()->getLocale() == 'ar' ? $product->name_ar : $product->name_en }}</h1>
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
    <p>{{ app()->getLocale() == 'ar' ? $product->description_ar : $product->description_en }}</p>
    <p>{{ __('Price:') }} {{ $product->price }}</p>
    <a href="{{ route('home') }}" class="btn btn-secondary">{{ __('Back to Products') }}</a>
</div>
@endsection
