<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex">
    <!-- 検索エンジンに出ないようにする -->
    <title>~結婚式招待状~</title>

    <!-- フォントSP版対応 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">

    <!-- 管理側のcss読み込み -->
    <link href="{{ asset('css/admin_index.css') }}" rel="stylesheet">
</head>


<body>
    <header>
        @include('header')
    </header>
    <br>
    <div class="container">
        @yield('content')
    </div>
    @include('footer')
</body>

</html>
