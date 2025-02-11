@extends('frontend.layouts.layout')

@section('content')
  <header class="site-header parallax-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-sm-7">
          <h2 class="title">ブログ</h2>
        </div>
        <div class="col-sm-5">
          <div class="breadcrumbs">
            <ul>
              <li><a href="/">ホーム</a></li>
              <li>ブログ</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Portfolio-Area-Start -->
  <section class="blog-area section-padding">
    <div class="container">
      <div class="row">
        <!-- ブログ記事 1 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-1.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">朝の光が紡ぐ物語</a></h3>
              <div class="desc">
                <p>静かな朝の空気の中、新たな一日の希望と出会う瞬間を大切に綴りました。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ブログ記事 2 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-2.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">雨上がりの道で出会う奇跡</a></h3>
              <div class="desc">
                <p>しとしと降る雨が止んだ後、静寂の中に浮かぶ小さな奇跡を感じた一瞬の記録です。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ブログ記事 3 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-3.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">風に舞う季節の記憶</a></h3>
              <div class="desc">
                <p>秋風が運ぶ懐かしい記憶とともに、かすかな切なさをそっと描いた物語です。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ブログ記事 4 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-4.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">月明かりに浮かぶ夢の欠片</a></h3>
              <div class="desc">
                <p>澄み渡る夜空に照らされた月の光が、忘れかけた夢と希望をそっと呼び覚ますひとときです。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ブログ記事 5 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-5.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">星降る夜に紡ぐ願い</a></h3>
              <div class="desc">
                <p>煌びやかな星空の下、一つ一つの願いが未来への輝きを放つ夜の物語です。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ブログ記事 6 -->
        <div class="col-xl-4 col-md-6">
          <div class="single-blog">
            <figure class="blog-image">
              <img src="{{ asset('frontend/assets/images/blog-6.jpg') }}" alt="">
            </figure>
            <div class="blog-content">
              <h3 class="title"><a href="blog-details.html">静寂の中で輝く自分らしさ</a></h3>
              <div class="desc">
                <p>喧騒から離れ、一息ついたその時に見えてくる、本当に大切な自分自身の声を記しました。</p>
              </div>
              <a href="#" class="button-primary-trans mouse-dir">続きを読む <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <nav class="navigation pagination">
            <div class="nav-links">
              <a class="previus page-numbers" href="#">
                <i class="fal fa-angle-left"></i>
              </a>
              <span class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#">4</a>
              <a class="page-numbers" href="#">5</a>
              <a class="next page-numbers" href="#">
                <i class="fal fa-angle-right"></i>
              </a>
            </div>
          </nav>
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
                  <h3 class="title">心ひとつに、新たな一歩を踏み出す時</h3>
                  <div class="desc">
                    <p>今日の小さな勇気が明日の大きな希望に変わる。自分を信じ、未来へ進む準備はできていますか？</p>
                  </div>
                  <a href="#" class="button-orange mouse-dir">今すぐ始める <span class="dir-part"></span></a>
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
