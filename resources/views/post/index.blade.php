<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $post)
        <p>
            {{$post->title}}
        </p>
        <img src="{{  asset($post->image_book_path)  }}" >
        <p>
            {{$post->body}}
        </p>
        <form method="post" action="{{ route('post.destroy', $post) }}">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
    </form>
    @endforeach
    
</body>
</html>