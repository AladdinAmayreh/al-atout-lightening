@extends('layouts.master')

@section('title', __('About Us'))

@section('content')

    {{-- <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div> --}}



    <section class="site-banner jarallax min-height300 padding-large"
        >
        <div class="container">
            <div class="swiper main-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"
                    style="background-image: url('images/banner1.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="banner-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <h2 class="banner-title">Summer Collection</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim
                              pharetra hac.</p>
                            <div class="btn-wrap">
                              <a href="shop.html" class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">Shop it
                                now <i class="icon icon-arrow-io"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide"
                    style="background-image: url('images/banner2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
                    <div class="banner-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6">
                            <h2 class="banner-title">Casual Collection</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim
                              pharetra hac.</p>
                         
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>



    <div class="theme-home">
        <h1>{{ __('Welcome to Al Atout Lighting') }}</h1>
        <div class="products row">
          <h2>Prodcts</h2>
            @foreach($products as $product)
                <div class="col-md-4 product-item">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                    <h2>{{ app()->getLocale() == 'ar' ? $product->name : $product->name }}</h2>
                    <p>{{ app()->getLocale() == 'ar' ? $product->description : $product->description }}</p>
                    <p>{{ __('Price:') }} {{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">{{ __('View Details') }}</a>
                  </div>
            @endforeach
        </div>
    </div>
@endsection
