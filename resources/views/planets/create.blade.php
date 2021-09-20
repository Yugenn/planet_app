<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
        <h1>惑星情報登録</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="name">名前</label>
            <input type="text" name="name">
        </p>
        <p>
            <label for="description">名前(英語)</label>
            <input type="text" name="en_name">
        </p>
        <p>
            <label for="price">半径</label>
            <input type="number" name="radius">
        </p>
        <p>
            <label for="seller">重量</label>
            <input type="number" name="weight">
        </p>
        

        <input type="submit" value="登録">
    </form>
</body>
</html>