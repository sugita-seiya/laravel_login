<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <title>BLOGGGGGGGGGG</title>
  <!--ブーストラップの導入-->
  <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
</head>

<body>
  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a class='navbar-brand' >Lunchmap</a>
  </nav>
  <div class="container">
    <h1>blog bbs</h1>
    <p>{{$message}}</p>
    @foreach($articles as $article)
      <p>
        <a href='{{ route("article.show", ["id" => $article->id]) }}'>
        {{$article->content}},
        {{$article->user_name}}
      </p>
    @endforeach
  
  <div>
    <a href={{route('article.new')}}>新規投稿</a>
  </div>
  </div>
</body>
</html>