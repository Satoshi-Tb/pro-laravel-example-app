<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="">
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge″>
    <title>つぶやきアプリ</title>
 </head>
<body>
    <h1>つぶやきアプリ</h1>
    <div>
    @foreach($tweets as $tweet)
        <p>{{ $tweet->content }}</p>
    @endforeach
    </div>
</body>
</html>