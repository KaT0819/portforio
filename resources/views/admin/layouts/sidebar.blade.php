<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <div class="form-inline mr-auto"></div>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown"
        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
          <i class="far fa-user"></i> プロフィール
        </a>
        <a href="features-settings.html" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> 設定
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> ログアウト
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">ダッシュボード</li>
      <li class="nav-item active">
        <a href="index.html" class="nav-link"><i class="fas fa-fire"></i><span>ダッシュボード</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
          <span>Dropdown</span></a>
        <ul class="dropdown-menu" style="display: none;">
          <li><a class="nav-link" href="">test</a></li>

        </ul>
      </li>
      <li class="menu-header">セクション</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
          <span>ヒーロー</span></a>
        <ul class="dropdown-menu" style="display: none;">
          <li><a class="nav-link" href="{{route('admin.hero.index')}}">ヒーローセクション</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
