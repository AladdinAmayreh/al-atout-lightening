@extends('layouts.master')

@section('title', __('Contact Us'))

@section('content')

<!-- Banner Section -->
<section class="site-banner jarallax padding-large" style="background: url('{{ asset('storage/' . $contactContent->image) }}') no-repeat; background-position: top;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">{{ __('Contact Us') }}</h1>
                <div class="breadcrumbs">
                    <span class="item">
                        <a href="{{ route('home') }}">{{ __('Home') }} /</a>
                    </span>
                    <span class="item">{{ __('Contact Us') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-us" class="padding-large">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <!-- Company Information -->
            <div class="col-lg-8 col-md-12">
                <h2 class="section-title">{{ __('Contact Information') }}</h2>
                <p>{{ app()->getLocale() == 'ar' ? $contactContent->description_ar : $contactContent->description_en }}</p>

                <!-- Dynamic Company Contact Details -->
                <div class="contact-details mt-4">
                    @if($contactContent->phone)
                        <p><i class="icon icon-phone"></i> {{ __('Phone') }}: {{ $contactContent->phone }}</p>
                    @endif

                    @if($contactContent->fax)
                        <p><i class="icon icon-fax"></i> {{ __('Fax') }}: {{ $contactContent->fax }}</p>
                    @endif

                    @if($contactContent->email)
                        <p><i class="icon icon-envelope"></i> {{ __('Email') }}: {{ $contactContent->email }}</p>
                    @endif

                    @if($contactContent->address_en || $contactContent->address_ar)
                        <p><i class="icon icon-map-marker"></i> {{ __('Address') }}: 
                            {{ app()->getLocale() == 'ar' ? $contactContent->address_ar : $contactContent->address_en }}
                        </p>
                    @endif
                </div>
            </div>

         
        </div>
    </div>
</section>

@endsection
