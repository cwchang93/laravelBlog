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
        <li><a href="{{ route('posts.index') }}"> Blog Posts</a></li>
        <li><a href="{{ route('posts.create') }}"> Create Blog</a></li>
    </ul>

    @if(session()->has('status'))
        <p style="color:green">
            {{ session()->get('status') }}
        </p>

    @endif

    @yield('content')

</body>
</html>
