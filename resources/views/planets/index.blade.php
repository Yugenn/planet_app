<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>惑星一覧</h1>
    <ul>        
        @foreach ($planets as $planet)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></li>
        @endforeach</ul>
        <!-- 新規登録画面へジャンプする -->
    <a href="/planets/create">登録する</a>
</body>
</html>