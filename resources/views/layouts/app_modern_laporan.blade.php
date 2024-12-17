<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} :: {{ env('APP_NAME') }}</title>
    <link rel="shortcut_icon" href="image/png" href="/modern/src/assets/images/logos/favicon.png">
    <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css">
</head>
<body>
    @yield('content')
</body>
</html>
