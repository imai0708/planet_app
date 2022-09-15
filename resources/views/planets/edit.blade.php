<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet edit</title>
</head>

<body>
    <h1>惑星情報編集</h1>
    {{-- <form action="/planets/{{ $planet->id }}" method="post"> --}}
    {{-- <form  href="/planets/{{ $planet->id }}"></a>
        @csrf
        @method('PATCH')
        {{-- 名前 --}}
    {{-- <p>
            <label for="name">名前</label><br>
            <input type="string" name="name">
        </p> --}}

    {{-- 名前(英語) --}}
    {{-- <p>
            <label for="enname">名前(英語)</label><br>
            <input type="string" name="enname">
        </p> --}}

    {{-- 半径 --}}
    {{-- <p>
            <label for="radius">半径</label><br> --}}
    {{-- <input type="integer" name="radius"> --}}
    {{-- <input type="number" name="radius" min="0" max="10000000000">
        </p> --}}

    {{-- 重量 --}}
    {{-- <p>
            <label for="radius">重量</label><br>
            <input type="number" name="weight" min="0" max="10000000000">
        </p>
        <p>
            <input type="submit" value="更新">
        </p> --}}
    {{-- <a href="/planets/{{ $planet->id }}">戻る</a> --}}
    {{-- </form> --}}

    <!-- 更新先はmemosのidにしないと増える php artisan rote:listで確認① -->
    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        {{-- 名前 --}}
        <p>
            <label for="name">名前</label>
            <input type="string" name="name" value="{{ $planet->name }}">
        </p>

        {{-- 名前(英語) --}}
        <p>
            <label for="enname">名前(英語)</label>
            <input type="string" name="enname" value="{{$planet->enname }}">
        </p>

        {{-- 半径 --}}
        <p>
            <label for="radius">半径</label>
            {{-- <input type="integer" name="radius"> --}}
                <input type="number" name="radius" min="0" max="10000000000" value="{{$planet->radius }}">
        </p> 

        {{-- 重量 --}}
        <p>
            <label for="radius">重量</label>
            <input type="number" name="weight" min="0" max="10000000000" value="{{$planet->weight }}">
        </p>
        
        <p>
            <input type="submit" value="更新">
        </p>
        <a href="/planets/">戻る</a>
    
    </form>

</body>

</html>
