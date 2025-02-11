@extends('frontend.layouts.layout')

@section('content')
<header class="site-header parallax-bg">
  <div class="container">
      <div class="row d-flex align-items-center">
          <div class="col-sm-8">
              <h2 class="title">ブログ詳細</h2>
          </div>
          <div class="col-sm-4">
              <div class="breadcrumbs">
                  <ul>
                      <li><a href="#">ホーム</a></li>
                      <li>ブログ詳細</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-details section-padding">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <h2 class="head-title">不動産物件に関する人々の声</h2>
              <div class="blog-meta">
                  <div class="single-meta">
                      <div class="meta-title">公開日</div>
                      <h4 class="meta-value"><a href="#">2025年02月13日</a></h4>
                  </div>
                  <div class="single-meta">
                      <div class="meta-title">タグ</div>
                      <h4 class="meta-value"><a href="#">ウェブ開発</a></h4>
                  </div>
                  <div class="single-meta">
                      <div class="meta-title">コメント</div>
                      <h4 class="meta-value">258 件のコメント</h4>
                  </div>
              </div>
              <figure class="image-block">
                  <img src="{{asset('flontend/assets/images/blog-block-image.jpg')}}" alt="">
              </figure>
              <div class="description">
                  <h2>このセクションは独自のスタイルを有しています。記述は完結しました。</h2>
                  <p>この文章は、日本語のダミーテキストとして利用される例です。印刷や組版の分野で長年の実績を持ち、様々なプロジェクトで参考にされてきました。かつて未知の印刷業者がサンプルとして採用した手法が、現代のデザインにおいてもその影響を残しています。</p>
                  <blockquote>伝統あるダミーテキストは、歴史的な印刷物で数多く利用されてきました。未知の職人が文章のレイアウト確認のために導入した方法は、今なお多くのデザイン現場で重宝されています。</blockquote>
                  <ul class="gallery">
                      <li><img src="{{ asset('frontend/assets/images/blog-1.jpg')}}" alt="" class="img-fluid w-100"></li>
                      <li><img src="{{ asset('frontend/assets/images/gallery-4.jpg')}}" alt="" class="img-fluid w-100"></li>
                  </ul>
                  <p>この例文は、印刷技術と組版の伝統に根ざしたダミーテキストの一例であり、数多くのデザインサンプルとして利用されてきました。その歴史を感じさせる文体は、現代のクリエイティブな現場でも支持されています。</p>
                  <p>現代のデザインやWeb制作において、この種のサンプルテキストは実際のレイアウト確認に大いに役立っており、各媒体でその効果が証明されています。多種多様な使い方が、その汎用性を物語っています。</p>
              </div>
              <div class="single-navigation">
                  <a href="#" class="nav-link">
                      <span class="icon"><i class="fal fa-angle-left"></i></span>
                      <span class="text">前の記事：「桜舞う湖畔」</span>
                  </a>
                  <a href="#" class="nav-link">
                      <span class="text">次の記事：「紅葉に染まる町並み」</span>
                      <span class="icon"><i class="fal fa-angle-right"></i></span>
                  </a>
              </div>
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
                              <h3 class="title">今日から始めるあなたの旅</h3>
                              <div class="desc">
                                  <p>このサンプル文章は、デザイン検証のための仮テキストです。レイアウト確認と視覚効果を目的として配置され、実際の意味は含まれていません。</p>
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
