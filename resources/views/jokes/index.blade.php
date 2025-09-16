<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris Jokes </title>
</head>
<body>
    <div class="container">
        <h1>Chuck Norris Jokes vanuit de API</h1>
        <ul>
            {{-- Loopen door meerdere jokes in vorm van een array --}}
            @foreach ($jokes as $joke)
                <li>{{ $joke['value'] }}</li>
            @endforeach
        </ul>
        <a href="{{ route('jokes.index') }}" class="btn">Laad 5 nieuwe chuck norris grappen</a>
    </div>
</body>
</html>
