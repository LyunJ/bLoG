<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bLoG</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/top_nav.css">
    <link rel="stylesheet" href="css/mainpage.css">
</head>
<body>
    @auth
        <x-top-navigation />
    @endauth
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @yield('content')
    <script type="text/javascript" src="js/mainpage-portfolio-image-slide.js"></script>
</body>
</html>