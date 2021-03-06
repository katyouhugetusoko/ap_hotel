<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>APホテル</title>
    <style>
        body {
            margin:10px;
            line-height: 1.7;
        }
        a {
            text-decoration: none;
        }
        .main-nav {
            display: flex;
            font-size: 1.25rem;
            text-transform: uppercase;
            list-style: none;
            padding-top: 30px;
        }
        .main-nav li {
            margin-left: 36px;
        }
    </style>
</head>
<body>

    <header>
      
        <nav>
            <ul class="main-nav">
                <li><a href="./user">利用者一覧</a></li>
                <li><a href="./reserve">予約一覧</a></li>
                <li><a href="./detail">予約明細一覧</a></li>
                <li><a href="./room">部屋</a></li>
                <li><a href="./masuta">部屋種類</a></li>
            </ul>
        </nav>
    </header>
    <body>
    @yield('body')
    </body>
</body>
</html>