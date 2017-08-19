<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
	<header class="row">
        @include('includes.header')
    </header>
	<div class="container">
	    <div id="main" class="row">

	            @yield('content')
	    </div>
	</div>
	<div class="footer panel-default">
		<div class="container">
			<footer class="row">
	        @include('includes.footer')
	    	</footer>
	    </div>
    </div>
</body>
</html>