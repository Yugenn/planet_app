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
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->en_name }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td><a href="/planets/{{ $planet->id }}">詳細</a></td>
                <td><a href="/planets/{{ $planet->id }}/edit">編集</a></td>
                <td>
                    <form action="/planets/{{ $planet->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- @foreach ($planets as $planet)
            <!-- // リンク先をidで取得し名前で出力 -->
            <td><a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></td>
        @endforeach --}}
    <!-- 新規登録画面へジャンプする -->
    <a href="/planets/create">新規登録</a>
</body>

</html>
