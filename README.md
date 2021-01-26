# laravel_loginプロジェクト作成手順

- 1.git clone</br>
  git clone https://github.com/sugita-seiya/laravel_login.git
- 2.フォルダ移動</br>
　cd laravel_login

- 3.コンテナ起動&イメージ作成</br>
  docker-compose up -d --build</br>
4.コンテナに入る</br>
  docker-compose exec app ash</br>
5.ライブラリ郡のインストール</br>
 composer install  </br>
6.環境変数ファイルをコピー</br>
　cp .env.example .env</br>
7.アプリケーションキーの設定</br>
 php artisan key:generate</br>
8.マイグレーションファイルを実行してDBを作成</br>
  php artisan migrate</br>
9.ログイン</br>
  http://127.0.0.1:80</br>
