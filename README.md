# 八幡平Web管理

## 初期セットアップ
```
$ git clone git@github.com:kbanchi1111/hachimantai-spartacamp-admin-app.git
$ cd hachimantai-spartacamp-admin-app
$ git switch develop
$ docker run --rm \
  -v $(pwd):/opt \
  -w /opt \
  laravelsail/php80-composer:latest \
  bash -c "composer install"
$ cp .env.example .env
$ code .env  # MySQLの接続情報を以下に修正する
// 省略
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=hachimantai_spartacamp_admin_app
DB_USERNAME=sail
DB_PASSWORD=password
// 省略
$ sail up -d
$ sail artisan key:generate
$ sail artisan migrate:fresh --seed
```