# README

## このプロジェクトについて

シングルページアプリケーションの練習用

参考Qiita記事
https://qiita.com/shin1kt/items/8c98fb209de5caa9076d

### 一覧画面

<img width="1384" alt="一覧画面" src="https://user-images.githubusercontent.com/59214278/102001965-2e0e8380-3d3b-11eb-9e1d-c6915ba233e2.png">

### 新規投稿画面

<img width="1390" alt="スクリーンショット 2020-12-13 11 58 25" src="https://user-images.githubusercontent.com/59214278/102001975-4a122500-3d3b-11eb-9d0b-397da094de0d.png">

### 詳細表示画面

<img width="1386" alt="スクリーンショット 2020-12-13 12 04 38" src="https://user-images.githubusercontent.com/59214278/102001989-729a1f00-3d3b-11eb-83ce-8b3cff974061.png">


### 編集画面

<img width="1385" alt="スクリーンショット 2020-12-13 12 04 55" src="https://user-images.githubusercontent.com/59214278/102001998-8c3b6680-3d3b-11eb-93d2-cd1f0a0ef229.png">


## 構築手順

### コンテナの起動

```
cd laravel-docker-template
```

```
make build
```

```
make up
```

### Laravelのインストール

```
make create-project
```

serverディレクトリ配下のlaravelディレクトリにアプリのファイルが作成されるので、
その中身を非表示ファイルごと一階層上のディレクトリに移動させる

### MySQLとの接続を設定

- .envファイルを下記のように設定

```
DB_CONNECTION=mysql
DB_HOST=db（←コンテナ名）
DB_PORT=3306（←コンテナ側のポート番号）
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```

- .envの5行目も下記のように設定

```
APP_URL=http://localhost:8000
```

- 一度
```
```

### artisanコマンドの実行場所

```
make work
```