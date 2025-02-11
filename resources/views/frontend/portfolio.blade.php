@extends('frontend.layouts.layout')

@section('content')
  <header class="site-header parallax-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-sm-7">
          <h2 class="title">作品集</h2>
        </div>
        <div class="col-sm-5">
          <div class="breadcrumbs">
            <ul>
              <li><a href="/">ホーム</a></li>
              <li>作品集</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Portfolio-Area-Start -->
  <section class="portfolio-area section-padding" id="portfolio-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="filter-menu">
            <li class="active" data-filter="*">全ての作品</li>
            <li data-filter=".branding">ブランド戦略</li>
            <li data-filter=".interface">画面設計</li>
            <li data-filter=".experience">体験価値</li>
            <li data-filter=".development">Web制作</li>
          </ul>
        </div>
      </div>
      <div class="row portfolios">
        <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-1.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-1.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">蒼の煌めき</a></h4>
              <div class="desc">
                <p>繊細な色彩と洗練されたラインで、ブランドの新たな魅力を引き出す作品です。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item interface">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-2.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-2.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">紅の感動</a></h4>
              <div class="desc">
                <p>温かみのある配色で、ユーザーの心に響く直感的なデザインを実現。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item branding">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-3.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-3.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">緑の躍動</a></h4>
              <div class="desc">
                <p>自然の息吹を感じさせる、革新的なブランド表現の試み。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item interface experience">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-4.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-4.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">未来の窓</a></h4>
              <div class="desc">
                <p>革新的な視点から、生み出された使い心地と美しさの融合。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item branding development experience">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-5.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-5.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">創造の交響曲</a></h4>
              <div class="desc">
                <p>デザインと技術が奏でる、唯一無二の調和を表現した作品。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item interface">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-6.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-6.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">透明な奇跡</a></h4>
              <div class="desc">
                <p>シンプルさの中に深い意味を込めた、革新的な画面設計。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item development">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-7.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-7.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">技術の粋</a></h4>
              <div class="desc">
                <p>最新のウェブ技術を駆使し、効率と美観を両立した制作事例。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item experience">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-8.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-8.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">感性の波動</a></h4>
              <div class="desc">
                <p>ユーザーの感覚に直接訴える、斬新な体験デザインの表現です。</p>
              </div>
            </div>
          </div>
        </div>
        <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item development">
          <div class="single-portfolio">
            <figure class="portfolio-image">
              <img src="{{ asset('frontend/assets/images/portfolio-9.jpg')}}" alt="">
            </figure>
            <div class="portfolio-content">
              <a href="{{ asset('frontend/assets/images/portfolio-9.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
              <h4 class="title"><a href="/portfolio-details">革新の扉</a></h4>
              <div class="desc">
                <p>未来志向の発想で、新たな可能性を切り拓くウェブ制作プロジェクト。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <a href="#" class="load-more mouse-dir">もっと見る <i class="fal fa-sync"></i><span class="dir-part"></span></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio-Area-End -->

  <!-- Quote-Area-Start -->
  <section class="quote-area section-padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="quote-box">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="quote-content">
                  <h3 class="title">新たな一歩を踏み出そう</h3>
                  <div class="desc">
                    <p>独創の力が未来を紡ぐ。あなたの感性が新境地を開きます。</p>
                  </div>
                  <a href="#" class="button-orange mouse-dir">今すぐ挑戦 <span class="dir-part"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Quote-Area-End -->
@endsection
