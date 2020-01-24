<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--<link rel="stylesheet" type="text/css" href="/bower/fullpage.js/jquery.fullPage.scss" />-->
        <link rel="stylesheet" type="text/css" href="/bower/fullpage.js/src/fullpage.css" />
        <link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
        <link rel="stylesheet" type="text/css" href="/css/mediaqueries.css" />

        <script src="/bower/jquery/dist/jquery.js"></script>
        <script src="/bower/jquery-ui/jquery-ui.js"></script>
        <script src="/bower/fullpage.js/vendors/easings.min.js"></script>
        <script src="/bower/fullpage.js/vendors/scrolloverflow.min.js"></script>
        <script type="text/javascript" src="/bower/fullpage.js/src/fullpage.js"></script>
        <script type="text/javascript" src="/JS/fullPage.js"></script>

        <link rel="stylesheet" href="/bower/font-awesome/css/font-awesome.css">



    <body>

        <!--<img id="homepic"  src="/pictures/home.png" alt="home">-->
        <!--<img id="careerpic"  src="/pictures/career.png" alt="career">-->
        <!--<img id="contactpic" src="/pictures/contact.png" alt="contact me">-->
        <!--<img id="personalpic" src="/pictures/personal.png" alt="personal">-->

        @yield('content')




    </body>
</html>
