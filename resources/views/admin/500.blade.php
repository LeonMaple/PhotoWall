<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng v1.0</title>
    <style type="text/css">
        body {
            overflow: hidden !important;
            padding-top: 120px;
        }
    </style>
    @include('admin.layouts')

    <link rel="stylesheet" href="{{ URL::asset('admin/css/extra-pages.css') }}">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<div class="logo-error">
    <h1>HeLinFeng
        <span>v1.0</span>
    </h1>
</div>

<!-- Main content -->
<section class="page-error">

    <div class="error-page">
        <h2 class="headline text-info">500</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for. Meanwhile, you may <a class="error-link"
                                                                                       href='index'>return to
                    dashboard</a> or try using the search form.
            </p>
            <form class='search-form'>
                <input type="text" name="search" class='form-control' placeholder="Search">
            </form>
        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->

</section>


<!--  END OF PAPER WRAP -->


<!-- MAIN EFFECT -->
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/load.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>


</body>

</html>
