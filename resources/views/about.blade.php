@extends('layouts.master')

@section('title', __('About Us'))

@section('content')

<!-- Preloader (Optional) -->
<div class="preloader-wrapper">
    <div class="preloader">
    </div>
</div>

<!-- Banner Section -->
<section class="site-banner jarallax min-height300 padding-large"
    style="background: url('{{ asset('storage/' . $aboutContent->banner_image) }}') no-repeat; background-position: top;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">{{ __('About Us') }}</h1>
            </div>
        </div>
    </div>
</section>

<!-- Shipping Information Section -->
<section id="shipping-information" class="padding-large">
    <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-between">
            <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                    {{-- <i class="icon icon-truck"></i> --}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                    {{-- <i class="icon icon-return"></i> --}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                    {{-- <i class="icon icon-tags1"></i> --}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                    {{-- <i class="icon icon-help_outline"></i> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about-us">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Dynamic Image -->
            <div class="col-lg-6 col-md-12">
                <div class="image-holder">
                    <img src="{{ asset('storage/' . $aboutContent->about_image) }}" alt="About Us Image" class="about-image">
                </div>
            </div>

            <!-- Dynamic Text -->
            <div class="col-lg-6 col-md-12">
                <div class="detail">
                    <div class="display-header">
                        <h2 class="section-title">
                            {{ app()->getLocale() == 'ar' ? $aboutContent->title_ar : $aboutContent->title_en }}
                        </h2>
                        <p>
                            {{ app()->getLocale() == 'ar' ? $aboutContent->description_ar : $aboutContent->description_en }}
                        </p>
                        <div class="btn-wrap">
                            {{-- <a href="shop.html" class="btn btn-dark btn-medium d-flex align-items-center" tabindex="0">
                                {{ __('Shop our store') }}<i class="icon icon-arrow-io"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
