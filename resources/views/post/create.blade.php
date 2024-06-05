

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">



    @include('layouts.app')
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">商品登録</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">商品名/label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="image_book">商品イメージ</label>
                                <input type="file" class="form-control-file" id="image_book" name="image_book">
                            </div>

                            <!-- <div class="form-group">
                                <label for="body">記録</label>
                                <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                            </div> -->
                            <div class="form-group">
                                <label for="price">価格（円）</label>
                                <input type="int" class="form-control" id="price" name="price" required>
                            </div>                            

                            <button type="submit" class="btn btn-primary">保存</button>
                        </form>

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <a href="{{ route('site.top') }}">サイトトップへ</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
