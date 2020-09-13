<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BLOGGGGGGGGGG</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>blog bbs</h1>
    <p>{{$message}}</p>
    @foreach($articles as $article)
      <p>
        <a href='{{ route("article.show", ["id" => $article->id]) }}'>
        {{$article->content}}
      </p>
    @endforeach
  </div>
</body>
</html>