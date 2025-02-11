@extends('frontend.layouts.layout')

@section('content')
  <!-- Header-Area-Start -->
  <header class="header-area parallax-bg" id="home-page" style="background: url({{ asset($hero->image ? $hero->image : 'frontend/assets/images/header-bg.jpg') }}) no-repeat center center; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="header-text">
            <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">私はUI/UXデザイナーです</h3>
            <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $hero->title }}</h1>
            <div class="desc wow fadeInUp" data-wow-delay="0.4s">
              <p>{{ $hero->sub_title }}</p>
            </div>
            <a href="{{ $hero->btn_url }}" target="_blank" class="button-dark mouse-dir wow fadeInUp" data-wow-delay="0.5s">{{ $hero->btn_text }}<span class="dir-part"></span></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header-Area-End -->

  <!-- Service-Area-Start -->
  @include('frontend.sections.service')
  <!-- Service-Area-End -->

  <!-- About-Area-Start -->
  @include('frontend.sections.about')
  <!-- About-Area-End -->

  <!-- Portfolio-Area-Start -->
  @include('frontend.sections.portfolio')
  <!-- Portfolio-Area-End -->

  <!-- Skills-Area-Start -->
  @include('frontend.sections.skills')
  <!-- Skills-Area-End -->

  <!-- Experience-Area-Start -->
  @include('frontend.sections.experience')
  <!-- Experience-Area-End -->

  <!-- Testimonial-Area-Start -->
  @include('frontend.sections.testimonial')
  <!-- Testimonial-Area-End -->

  <!-- Blog-Area-Start -->
  @include('frontend.sections.blog')
  <!-- Blog-Area-End -->

  <!-- Contact-Area-Start -->
  @include('frontend.sections.contact')
  <!-- Contact-Area-End -->
@endsection
