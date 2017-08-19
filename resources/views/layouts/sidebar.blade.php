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
                <!-- sidebar content -->
                <div id="sidebar" class="col-md-4">
                    @include('includes.sidebar')
                </div>

                <!-- main content -->
                <div id="content" class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div><!--End container-->

        <div class="footer panel-default">
            <div class="container">
                <footer class="row">
                @include('includes.footer')
                </footer>
            </div>
        </div><!--End footer-->
    </body>
</html>