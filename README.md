# laravel_loginプロジェクト作成手順
1.git clone
  git clone https://github.com/sugita-seiya/laravel_login.git
2.フォルダ移動
　cd laravel_login
3.コンテナ起動&イメージ作成
  docker-compose up -d --build
4.コンテナに入る
  docker-compose exec app ash
5.ライブラリ郡のインストール
 composer install  
6.環境変数ファイルをコピー
　cp .env.example .env
7.アプリケーションキーの設定
 php artisan key:generate
8.マイグレーションファイルを実行してDBを作成
  php artisan migrate
9.ログイン
  http://127.0.0.1:80
