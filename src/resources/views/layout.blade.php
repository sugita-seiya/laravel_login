<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <title>BLOGGGGGGGGGG</title>
  @include('nav')
  <!--ブーストラップの導入-->
  <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
</head>

<body>
  @include('nav')
  <div class="container">
    @yield('content')
  </div>
</body>
</html>