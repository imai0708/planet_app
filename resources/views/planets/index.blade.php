<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet index</title>
</head>

<body>
    <h1>惑星一覧</h1>
    <table border="2">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            
        </tr>
        {{-- @foreach ($planets as $planet) --}}
        {{-- <a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a> --}}
        {{-- @endforeach --}}
        
        @foreach ($planets as $planet) 
            <tr>
                <td>{{ $planet->name }}</td>
                <td>{{ $planet->enname }}</td>
                <td>{{ $planet->radius }}</td>
                <td>{{ $planet->weight }}</td>
                <td>    
                    <a href="/planets/{{ $planet->id }}">詳細</a>
                </td>
            </tr>
        @endforeach
        </tr>

        {{-- <td>
                    @foreach ($planets as $planet)
                        {{ $planet->name }}
                    @endforeach
                </td> --}}



    </table>
</body>

</html>