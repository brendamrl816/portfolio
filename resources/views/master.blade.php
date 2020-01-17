<!DOCTYPE html>
 
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/bower/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="/bower/fullpage.js/jquery.fullPage.css" />
        <!--<link rel="stylesheet" type="text/css" href="/bower/fullpage.js/jquery.fullPage.scss" />-->
        
        <script src="/bower/jquery/jquery.min.js"></script>
        <script src="/bower/jquery-ui/jquery-ui.min.js"></script>
        <script src="/bower/fullpage.js/vendors/jquery.easings.min.js"></script>
        <script type="text/javascript" src="/bower/fullpage.js/jquery.fullPage.min.js"></script>
        <script type="text/javascript" src="/JS/fullPage.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
        <link rel="stylesheet" type="text/css" href="/css/mediaqueries.css" />
        
    </head>

    <body>
     
        <!--<img id="homepic"  src="/pictures/home.png" alt="home">-->
        <!--<img id="careerpic"  src="/pictures/career.png" alt="career">-->
        <!--<img id="contactpic" src="/pictures/contact.png" alt="contact me">-->
        <!--<img id="personalpic" src="/pictures/personal.png" alt="personal">-->
        
        @yield('content')
        
       
        
        
    </body>
</html>
