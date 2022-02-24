<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- manifest --}}
    <link rel="manifest" href="/manifest.json">

    <title>Laravel PWA</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Laravel PWA</h1>
            <img src="/images/ok-kos.png" alt="" width="150">
        </header>
        <hr>
        <main>
            <h3>Product List</h3>
            <select id="cat_select">
                <option value="all">Semua</option>
            </select>
            <div id="products">
                <h2>Selamat datang di web Laravel PWA</h2>
                <h5>Loading...</h5>
            </div>
        </main>
        <hr>
        <footer>Copyright 2022</footer>

        {{-- <script type="text/javascript" src="/js/jquery.slim.min.js"></script> --}}
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </div>

</body>

</html>
