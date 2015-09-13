<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="css/img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="css/img/favicon-16x16.png" sizes="16x16" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edron's Catering Services</title>

    <link rel="stylesheet" href="/css/frontend/all.css"/>
</head>
<body>
    @include('frontend.partials.top-header')
    @include('frontend.partials.nav')
    <div class="container">

        @yield('content')

    </div>

    @include('frontend.partials.footer')
    @yield('footer')
    <script type="text/javascript" src="/js/frontend/all.js"></script>
</body>
</html>
