<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luwe | Home</title>
</head>
<body>
    <h1>hello from index</h1>
    
    <p>{{ $greeting }}</p>

    @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name']}}</p>
                <a href="/ninjas/{{ $ninja['id']}} ">View details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>