@extends('frontend.layouts.layout')

@section('content')
<header class="site-header parallax-bg">
  <div class="container">
      <div class="row d-flex align-items-center">
          <div class="col-sm-8">
              <h2 class="title">作品詳細</h2>
          </div>
          <div class="col-sm-4">
              <div class="breadcrumbs">
                  <ul>
                      <li><a href="#">ホーム</a></li>
                      <li>ポートフォリオ</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="portfolio-details section-padding" id="portfolio-page">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <h2 class="head-title">革新と情熱の一瞬</h2>
              <figure class="image-block">
                  <img src="{{ asset('frontend/assets/images/portfolio-block.jpg')}}" alt="作品イメージ">
              </figure>
              <div class="portflio-info">
                  <div class="single-info">
                      <h4 class="title">依頼主</h4>
                      <p>桜ソリューションズ</p>
                  </div>
                  <div class="single-info">
                      <h4 class="title">日付</h4>
                      <p>2022年4月12日</p>
                  </div>
                  <div class="single-info">
                      <h4 class="title">ウェブサイト</h4>
                      <p>www.sakura-design.jp</p>
                  </div>
                  <div class="single-info">
                      <h4 class="title">役割</h4>
                      <p>ウェブデザイン・システム開発</p>
                  </div>
              </div>
              <div class="description">
                  <h2>情熱と創造が紡ぐ新たな物語</h2>
                  <p>本プロジェクトは、革新的なアイデアと熟練の技術が融合し、独自のデジタル体験を創出する試みです。緻密な計画の下、細部にまでこだわった制作プロセスが特徴となっています。</p>
                  <ul class="gallery">
                      <li><img src="{{ asset('frontend/assets/images/gallery-1.jpg')}}" alt="作品ギャラリー1" class="img-fluid w-100"></li>
                      <li><img src="{{ asset('frontend/assets/images/gallery-2.jpg')}}" alt="作品ギャラリー2" class="img-fluid w-100"></li>
                  </ul>
                  <h3>制作の軌跡</h3>
                  <p>制作過程では、アイデアの発掘から実装まで、試行錯誤と緻密なプランニングによって形になりました。各工程で生まれる新しい発見が、作品全体に独自の魅力を与えています。</p>
                  <ul class="dots-list">
                      <li>コンセプトからデザインまで、革新的な手法で表現しました。</li>
                      <li>ユーザー視点に立った直感的な操作性を追求しました。</li>
                      <li>個性豊かなビジュアルに、多面的な機能性を融合させました。</li>
                  </ul>
                  <p>各フェーズでの課題を乗り越え、常に高い品質のパフォーマンスを実現するために努力を続けました。</p>
                  <p>緻密なディテールと技術革新が、ユーザーにとって魅力的かつ使いやすい体験を生み出しました。</p>
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
                              <h3 class="title">未来への一歩</h3>
                              <div class="desc">
                                  <p>今こそ、変革の時。あなたの挑戦が新たな可能性を切り拓きます。</p>
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
