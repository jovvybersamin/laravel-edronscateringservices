<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edron's Catering Services</title>

    <link rel="stylesheet" href="/css/all.css"/>
</head>
<body>

@include('admin.partials.nav')

<div class="container-fluid main-container">

        @include('admin.partials.sidebar')

   		<div class="col-md-10 content">
   		    @include('flash::message')
            @include('admin.errors.lists')
   			@yield('content')
   		</div>
   	</div>

    @include('admin.partials.footer')
    <script type="text/javascript" src="/js/all.js"></script>
    @yield('footer')
</body>
</html>
