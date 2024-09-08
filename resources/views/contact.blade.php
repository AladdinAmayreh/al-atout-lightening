@extends('layouts.master')

@section('title', __('Contact Us'))

@section('content')
<section class="site-banner jarallax padding-large" style="background: url(images/hero-image.jpg) no-repeat; background-position: top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-title">Contact us</h1>
          <div class="breadcrumbs">
            <span class="item">
              <a href="{{ route('home') }}">Home /</a>
            </span>
            <span class="item">Contact us</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact-us" class="padding-large">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <!-- Company Information -->
            <div class="col-lg-8 col-md-12">
                <h2 class="section-title">{{ __('Contact Information') }}</h2>
                <p>{{ __('Feel free to reach out to us using the following contact details:') }}</p>
                
                <!-- Company Contact Details -->
                <div class="contact-details mt-4">
                    <p><i class="icon icon-phone"></i> {{ __('Phone') }}: +57 444 11 00 35</p>
                    <p><i class="icon icon-fax"></i> {{ __('Fax') }}: +57 444 11 00 36</p>
                    <p><i class="icon icon-map-marker"></i> {{ __('Location') }}: 1234 Street Name, City, Country</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
