@extends('frontend.layouts.layout')

@section('content')
  <!-- Header-Area-Start -->
  <header class="header-area parallax-bg" id="home-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="header-text">
            <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">私はUI/UXデザイナーです</h3>
            <h1 class="title wow fadeInUp" data-wow-delay="0.3s">こんにちは、山田太郎です</h1>
            <div class="desc wow fadeInUp" data-wow-delay="0.4s">
              <p>最新のデザインソリューションとユーザーに寄り添った体験で、皆様のビジネスに革新をもたらします。洗練されたアイデアと技術を駆使して、魅力的なデジタル空間を創造します。</p>
            </div>
            <a href="#" class="button-dark mouse-dir wow fadeInUp" data-wow-delay="0.5s">依頼する <span class="dir-part"></span></a>
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
