
<head>
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="codedthemes" />
<!-- Favicon icon -->

<link rel="icon" href="admin/images/favicon.ico" type="image/x-icon">
<!-- Google font-->     
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="admin/css/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link rel="stylesheet" href="admin/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="admin/icon/themify-icons/themify-icons.css">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="admin/icon/icofont/css/icofont.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="admin/icon/font-awesome/css/font-awesome.min.css">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="admin/css/style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div id="app">
       
                       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script type="text/javascript" src="admin/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="admin/js/jquery-ui/jquery-ui.min.js"></script>     <script type="text/javascript" src="admin/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="admin/js/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="admin/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="admin/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
    <script type="text/javascript" src="admin/js/SmoothScroll.js"></script>     <script src="admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.html"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.html"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.html"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.html"></script>
<script type="text/javascript" src="admin/js/common-pages.js"></script>
</html>
