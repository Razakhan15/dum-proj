<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    @for ($i = 0; $i < 10; $i++)
        <h1>
            {{$i}}
        </h1>
    @endfor
</body>
</html>