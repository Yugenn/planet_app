<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>惑星情報編集</h1>
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        
        <p> 
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name', $planet->name) }}">
        </p>
        <p>
            <label for="description">名前(英語)</label>
            <input type="text" name="en_name" value="{{ old('en_name', $planet->en_name) }}">
        </p>
        <p>
            <label for="price">半径</label>
            <input type="number" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="seller">重量</label>
            <input type="number" name="weight" value="{{ old('weight', $planet->weight) }}">
        </p>


        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>
</body>

</html>
