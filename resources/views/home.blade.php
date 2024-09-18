@extends('layouts.master')

@section('title', __('Home'))

@section('content')

    <section id="billboard" class="overflow-hidden">
        {{-- <div class="container"> --}}
          <button class="button-prev">
            <i class="icon icon-chevron-left"></i>
          </button>
          <button class="button-next">
            <i class="icon icon-chevron-right"></i>
          </button>
        <!-- Display dynamic content for the banners -->
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <!-- First Banner Slide -->
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('storage/' . $content->banner_image_1) }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="banner-title">{{ $content->banner_title_1 }}</h2>
                                    <p>{{ $content->banner_text_1 }}</p>
                                    <div class="btn-wrap">
                                        <a href="shop.html" class="btn btn-light btn-medium d-flex align-items-center"
                                            tabindex="0">
                                            {{ __('Shop it now') }} <i class="icon icon-arrow-io"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Banner Slide -->
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('storage/' . $content->banner_image_2) }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="banner-title">{{ $content->banner_title_2 }}</h2>
                                    <p>{{ $content->banner_text_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </section>
    </br></br>
    <!-- About Us Section -->
    <section id="about-us">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="image-holder">
                        <img src="{{ asset('storage/' . $content->about_us_image) }}" alt="About Us" class="about-image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="detail">
                        <div class="display-header">
                            <h2 class="section-title">{{ $content->section_title }}</h2>
                            <p>{{ $content->about_us_text }}</p>
                            {{-- <div class="btn-wrap">
                                <a href="shop.html" class="btn btn-dark btn-medium d-flex align-items-center"
                                    tabindex="0">
                                    {{ __('Shop our store') }} <i class="icon icon-arrow-io"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ __('Our Vision') }}</h2>
                    <p>{{ $content->vision_text }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="featured-products" class="product-store padding-large">
    <div class="container">
      <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
        <h2 class="section-title">{{ __('Welcome to Al Atout Lighting') }}</h2>            
        <div class="btn-wrap">
          <a href="shop.html" class="d-flex align-items-center">{{ __('Products') }}<i class="icon icon icon-arrow-io"></i></a>
        </div>            
      </div>
 
      <div class="swiper product-swiper overflow-hidden">
          <div class="swiper-wrapper">
              @foreach ($products as $product)
                  <div class="swiper-slide">
                      <div class="product-item">
                          <div class="image-holder">
                              <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                          </div>
                          <div class="cart-concern">
                              <div class="cart-button d-flex justify-content-between align-items-center">
                                <button type="button" class="btn-wrap cart-link d-flex align-items-center" onclick="window.location.href='{{ route('products.show', $product->id) }}'">
                                  {{ __('View Item') }}
                                  {{-- <i class="icon icon-arrow-io"></i> --}}
                              </button>
                              
                                  {{-- <button type="button" class="view-btn tooltip d-flex">
                                      <i class="icon icon-screen-full"></i>
                                      <span class="tooltip-text">{{ __('Quick view') }}</span>
                                  </button>
                                  <button type="button" class="wishlist-btn">
                                      <i class="icon icon-heart"></i>
                                  </button> --}}
                              </div>
                          </div>
                          <div class="product-detail">
                              <h3 class="product-title">
                                  <a href="{{ route('products.show', $product->id) }}">{{ app()->getLocale() == 'ar' ? $product->name : $product->name }}</a>
                              </h3>
                              <span class="item-price text-primary">{{ $product->price }}</span>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
    </section>
    </div>


@endsection
