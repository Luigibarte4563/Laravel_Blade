<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luwe | Home</title>
</head>
<body>
    <h1>hello from index</h1>
    
    <p>{{ $greeting }}</p>

    <ul>
        <li>
            <a href="/luwes/{{$ninjas[0]["id"]}}">
                {{ $ninjas[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="/luwes/{{$ninjas[1]["id"]}}">
                {{ $ninjas[1]["name"]}}
            </a>
        </li>
    </ul>
</body>
</html>