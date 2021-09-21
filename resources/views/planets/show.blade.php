<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <p>
        <b>名前:{{ $planet->name }}</b>
    </p>
    <p>
        <b>名前(英語):{{ $planet->en_name }}</b>
    </p>
    <p>
        <b>半径:{{ $planet->radius }}</b>
    </p>
    <p>
        <b>重量:{{ $planet->weight }}</b>
    </p>

    <a href="/planets">戻る</a>
    {{-- <div class="button-group">
        <!-- 商品のidを元に編集ページへ遷移する -->
        <button onclick="location.href='/planets/{{ $planet->id }}/edit'">編集する</button>
        <form action="/planets/{{ $planet->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div> --}}
</body>

</html>
