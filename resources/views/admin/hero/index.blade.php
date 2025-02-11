@extends('admin.layouts.layout')

@section('content')
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>ヒーローセクション</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>ヒーローセクションの更新</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.hero.update', 1) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">タイトル</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="title" class="form-control" value="{{ $hero->title }}" required>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">サブタイトル</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea name="sub_title" id="" class="form-control" style="height: 100px" required>{{ $hero->sub_title }}</textarea>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ボタンテキスト</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="btn_text" class="form-control" value="{{ $hero->btn_text }}" required>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ボタンURL</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="btn_url" class="form-control" value="{{ $hero->btn_url }}" required>
                  </div>
                </div>

                @if ($hero->image)
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">背景画像プレビュー</label>
                  <div class="col-sm-12 col-md-7">
                    <img class="w-25" src="{{ asset($hero->image) }}" alt="">
                  </div>
                </div>
                @endif
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">背景画像</label>
                  <div class="col-sm-12 col-md-7">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label">ファイルを選択</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <img id="imagePreview" class="w-25" src="#" alt="画像プレビュー" style="display: none;">
                  </div>
                </div>
                <script>
                  document.getElementById('customFile').addEventListener('change', function(event) {
                    var file = event.target.files[0];
                    if (file) {
                      var reader = new FileReader();
                      reader.onload = function(e) {
                        var preview = document.getElementById('imagePreview');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                      };
                      reader.readAsDataURL(file);
                    }
                  });
                </script>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">更新</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
