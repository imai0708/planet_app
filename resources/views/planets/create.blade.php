<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
    @csrf
        
        {{-- 名前 --}}
        <p>
            <label for="name">名前</label><br>
            <input type="string" name="name">
        </p>

        {{-- 名前(英語) --}}
        <p>
            <label for="enname">名前(英語)</label><br>
            <input type="string" name="enname">
        </p>

        {{-- 半径 --}}
        <p>
            <label for="radius">半径</label><br>
            {{-- <input type="integer" name="radius"> --}}
            <input type="number" name="radius" min="0" max="10000000000">
        </p>

        {{-- 重量 --}}
        <p>
            <label for="radius">重量</label><br>
            {{-- <select> --}}
                <input type="number" name="weight" min="0" max="10000000000">
                    {{-- <size= "10000000000">  --}}
            {{-- </select> --}}
        </p>

        <input type="submit" value="新規登録">

    </form>

</body>

</html>
