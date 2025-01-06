@extends('admin.layouts.layout')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>プロフィール</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">ダッシュボード</a></div>
        <div class="breadcrumb-item">プロフィール</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">こんにちは、{{ old('name', $user->name) }}!</h2>
      <p class="section-lead">
        このページで自分自身の情報を変更してください。
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-6 col-lg-10">
          <div class="card">
            <form method="post" action="{{ route('profile.update') }}" class="needs-validation" novalidate="">
              @csrf
              @method('patch')

              <div class="card-header">
                <h4>プロフィール編集</h4>
              </div>
              <div class="card-body">
                <div clas="form-group">
                  <label for="name">名前</label>
                  <input id="name" type="text" class="form-control" name="name"
                    value="{{ old('name', $user->name) }}">
                  @if ($errors->has('name'))
                    <code>{{ $errors->first('name') }}</code>
                  @endif
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email"
                    value="{{ old('email', $user->email) }}" tabindex="1" required autofocus>
                  @if ($errors->has('email'))
                    <code>{{ $errors->first('email') }}</code>
                  @endif
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">変更を保存</button>
              </div>
            </form>
          </div>
          <div class="card">
            <form method="post" action="{{ route('password.update') }}" class="needs-validation" novalidate="">
              @csrf
              @method('put')

              <div class="card-header">
                <h4>パスワード更新</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="current_password" class="control-label">現在のパスワード</label>
                  <input id="current_password" type="password" class="form-control" name="current_password" tabindex="2" autocomplete="current-password">
                  @if ($errors->updatePassword->has('current_password'))
                    <code>{{ $errors->updatePassword->first('current_password') }}</code>
                  @endif
                </div>
                <div class="form-group">
                  <label for="password" class="control-label">新しいパスワード</label>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="new-password">
                  @if ($errors->updatePassword->has('password'))
                    <code>{{ $errors->updatePassword->first('password') }}</code>
                  @endif
                </div>
                <div class="form-group">
                  <label for="password_confirmation" class="control-label">パスワード確認</label>
                  <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" tabindex="2" required autocomplete="new-password">
                  @if ($errors->updatePassword->has('password_confirmation'))
                    <code>{{ $errors->updatePassword->first('password_confirmation') }}</code>
                  @endif
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">変更を保存</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
