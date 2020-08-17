<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LangIsland - Then I learned</title>
</head>
<body>

    <ul>
        <li><a href="{{ route('index') }}">首頁</a></li>
        <li><a href="{{ route('login') }}">login</a></li>
        <li><a href="{{ route('blog-post', ['id' => 1]) }}">blog Post 1</a></li>
    </ul>


    @yield('content')

</body>
</html>
