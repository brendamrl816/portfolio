@extends('master')

@section('content')



     <button class="nav-button show"><i class="fa fa-bars" aria-hidden="true"></i></button>
     <button class="close-nav hide"><i class="fa fa-times" aria-hidden="true"></i></button>
        <div class="divMenu hide">
            <ul id="myMenu">
                <li data-menuanchor="home" class="active nav-li"><a class="nav-a" href="#home">HOME</a></li>
                <li data-menuanchor="career" class="nav-li"><a class="nav-a" href="#career">CAREER</a></li>
                <li data-menuanchor="personal" class="nav-li"><a class="nav-a" href="#personal">PERSONAL</a></li>
                <li data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTACT ME</a></li>
            </ul>
        </div>
        <!--<div style="width:100%; height:60px; background-color:#f2f2f2">&nbsp;</div>-->
        <!--<div class="big-name">Brenda Castillo</div>-->

         <div id="fullpage">
            <div class="section">
                <div class="homeMainDiv">
                    <img  class="puzzle1" src="/pictures/puzzle1.png">
                    <img class="puzzle2" src="/pictures/puzzle2.png">
                    <img class="puzzle3" src="/pictures/puzzle3.png">
                    <img class="puzzle4" src="/pictures/puzzle4.png">
                    <div class="mainPic"></div>
                </div>

                <div class="enterDiv">
                        <h1 class="h-move">Brenda Castillo</h1>
                        <h2 class="h-move">Software Developer <span class="dot1">.</span><span class="dot2">.</span><span class="dot3">.</span></h2>
                        <div class="arrow">
                            <div>scroll down</div>
                            <div><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                        </div>
                </div>


            </div>

            <div class="section fp-auto-height">
                <div class="main-container opacity8">
                    <div class="head2 slide-left"><span class="inside-header">WORK</span></div>
                     <div class="insideMain blue">
                         <br>
                         <div class="lelement bold">Samsung</div>
                         <div class="relement bold">March 2015 - May 2018</div>
                         <br>
                         <p style="margin:20px">
                           Oversaw data returns for Samsung.  During my time there I wrote Excel VBA programs that auto-generate files for ease of access, email condensation, and request sequence creation.
                           The programs were coded to automatically classify information entered from purchase tables which are derived from the database. Units are sorted according to model numbers, streamlining
                           the process and cutting the labor time by 50%.
                        <br>
                            In addition, I was part of the Washer Project Recall, where I was tasked with creating uploade files for processing over 3,000 different requests from customers all over the US.  I
                            also assited with discrepancy reports and implementing programs to compare the incoming daily reports.
                         </p>
                     </div>

                     <div class="insideMain">
                         <table style="text-align:center; width:90%; margin-left:5%">
                            <tr>
                                <th>Techonology Summary:</th>
                                <td style="text-align:left">C++, Java, PHP, JavaScript, JQuery, MySQL, CSS, HTML5, AngularJS, Laravel</td>
                            </tr>
                        </table>
                     </div>

                    <div class="head2 slide-left"><span class="inside-header">PROJECTS</span></div>
                    <div class="insideMain green">

                        <div class="bold" style="width:100%; text-align:center; margin-top:15px; margin-bottom:20px">
                            <a style="text-decoration:none; color:inherit; cursor:pointer" href="http://gmplanner.com">
                                <img style="width:30%" src="/pictures/gmplanner.jpg">
                                <div style="display:block">GMPlanner</div>
                            </a>
                        </div>

                        <ul>
                            <li>Application backend implemented with Laravel.</li>
                            <li>User data stored in MySQL server</li>
                            <li>Implemented API of application and flagged user events based on dates and repetitions.</li>
                            <li>Made use of Laravel middleware resources for data authentication.</li>
                            <li>User Interface implemented with AngularJS.</li>
                            <li>Used promises for getting/updating/deleting user information from backend.</li>
                            <li>Extensively utilized angular resources such as controllers, directives and services for data input and output.</li>
                            <li>Different types of calendar displays were handled by Angular's ui-route.</li>
                             <li>Custom Angular's parsers and formatters for input validation.</li>
                            <li>Changed layout display according to screen size with CSS media queries and animations.</li>
                            <li>Application server deployed on Amazon Linux Server.</li>
                            <li>Continuous integration using GIT</li>
                        </ul>

                    </div>

                    <!--<div class="head2 slide-left"><span class="inside-header">EDUCATION</span></div>-->
                    <!--<h2 style="width:100%; text-align:left; margin-top:10px" class=""><span style="margin-left:5%">EDUCATION</span></h2>-->
                    <!--<div class="insideMain brown" style="margin-bottom:30px">-->
                    <!--     <div class="lelement bold">Bergen Community College</div>-->
                    <!--     <div class="relement italic">Computer Science</div>-->
                    <!--     <br>-->
                    <!--     <div class="lelement">Associates in Science</div>-->
                    <!--     <br>-->
                    <!--     <div class="lelement bold">New Jersey Institute of Technology</div>-->
                    <!--     <div class="relement italic">Computer Science</div>-->
                    <!--     <br>-->
                    <!--     <div class="lelement">Currently attending</div>-->
                    <!--</div>-->
                </div>
            </div>



            <div class="section fp-auto-height">

                <div class="slideRelative">
                    <div class="SlidePic"></div>

                </div>

                <div class="main-container">
                    <div class="insideMain">
                        <div style="background-color:white; display:inline-block; padding:10px">
                            <p style="margin-left:5%; margin-right:5%; margin-bottom:40px">
                            My personal modus operandi is:  I believe obstacles, no matter how insurmountable they may appear, can be traversed through perseverance and dedication.
                            I commit whole heartily to everything I undertake, including helping others at my own expense, no matter the personal cost. I believe in justice and fairness,
                            and paying knowledge forward by teaching others what I have learned.
                            </p>

                        </div>
                            <div class="head4 animate slide-left"><span class="inside-header">My Favorite Things</span></div>
                            <div class="insideMain pink">
                                <ul class="">
                                    <li>Color: Peach</li>
                                    <li>Sport: Soccer</li>
                                    <li>Sports team: Barcelona FC</li>
                                    <li>Movie: Saving Private Ryan/Grease</li>
                                    <li>Animal: Wolf/Owl</li>
                                </ul>
                            </div>

                    </div>

                </div>
            </div>

            <div class="section fp-auto-height">
                <div class="main-container opacity4">
                    <!--<div class="insideMain">-->
                    <h1>CONTACT ME</h1>
                        <div class="m-top link"><span class="bold head3">Email: </span>&nbsp;brendamrl816@gmail.com</div>
                        <br>
                        <div class="link"><span class="bold head3">LinkedIn: </span><a style="text-decoration:none; color:inherit; cursor:pointer" href="https://www.linkedin.com/in/brenda-castillo-06450934">&nbsp; linkedin.com/in/brenda-castillo-06450934</a></div>

                        <div style="width:100%">
                           @if (session('status'))
                                <div class="email-status">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @foreach ($errors->all() as $error)
                                <p class="email-error">*{{$error}}</p>
                            @endforeach
                        </div>

                        <form class="contactForm" method="post" action="/sendEmail">
                            {!! csrf_field() !!}

                            <div class="message">
                                <div class="m-name">
                                    <input class="message-text" type="text" placeholder="your name" name="name"  value="{{ old('name') }}" required>
                                </div>
                                <div class="m-email">
                                    <input class="message-text" type="email" placeholder="your email" name="email"  value="{{ old('email') }}" required>
                                </div>
                            </div>


                            <div class="message">
                                <textarea class="message-textArea" placeholder="message" name="content"  value="{{ old('content') }}" required></textarea>
                            </div>
                            <div class="message" style="margin-top:10px; text-align:center">
                                <button class="mbutton">send message</button>
                            </div>

                        </form>

                    <!--</div>-->

                </div>
            </div>

        </div>




@endsection
