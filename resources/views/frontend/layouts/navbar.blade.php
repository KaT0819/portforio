<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Rabins">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home-page">ホーム</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-page">私について</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio-page">ポートフォリオ <i class="fas fa-angle-down"></i></a>
          <ul class="sub_menu">
            <li><a href="portfolio.html">ポートフォリオ一覧</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills-page">スキル</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog-page">ブログ <i class="fas fa-angle-down"></i></a>
          <ul class="sub_menu">
            <li><a href="blog.html">ブログ一覧</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact-page">連絡先</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
