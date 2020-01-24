@extends('master')

@section('content')



<!-- **************************************************preloader******************************************* -->
    <div class="preloader">
      <div style="font-size:200%;">Brenda Castillo</div>
      <div class="preloader-dot-container">
        <div id="pl-dot1" class="loader-dot" style="background-color:#eab2bc;"></div>
        <div id="pl-dot2" class="loader-dot" style="background-color:#80c5ac;"></div>
        <div id="pl-dot3" class="loader-dot" style="background-color:#b890c5;"></div>
        <div id="pl-dot4" class="loader-dot" style="background-color:#74abc5;"></div>
        <div id="pl-dot5" class="loader-dot" style="background-color:#c7843f;"></div>
        <div id="pl-dot6" class="loader-dot" style="background-color:#9fb361;"></div>
      </div>
    </div>

<!-- **************************************************navigation******************************************* -->
     <button class="nav-button hide" onclick="toggleNavButton(event)"><i class="fa fa-bars" aria-hidden="true"></i></button>

      <div class="divMenu hide">
          <ul id="myMenu">
              <li data-menuanchor="home" class="active nav-li"><a class="nav-a" href="#home">HOME</a></li>
              <li data-menuanchor="career" class="nav-li"><a class="nav-a" href="#career">PROJECTS</a></li>
              <li data-menuanchor="personal" class="nav-li"><a class="nav-a" href="#personal">PERSONAL</a></li>
              <li data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTACT ME</a></li>
          </ul>
      </div>


<!-- **************************************************languages******************************************* -->

  <div class="language language-position hide">
    <a href="es"><button class="language-button">Español</button></a>
  </div>


<!-- *****************************************************body************************************************* -->
     <div id="fullpage">
        <div class="section fp-auto-height">
            <div class="enterDiv">
                <div class="enterDiv-container-left">

                </div>
                <div class="enterDiv-container-right">
                    <div class="enterDiv-container-right-pic">
                    </div>
                    <div class="enterDiv-container-right-content">
                        <div class="enterDiv-container-right-content-text">
                          <h1>Hello, welcome to Brenda Castillo's Portfolio</h1>
                          <p>I am a software developer. Please take a look at my work, visit my social media,
                            check out my resume and learn how to get in contact with me.
                          </p>
                          <p>Thanks for coming!</p>
                        </div>
                    </div>
                </div>
                <div class="arrow">
                  <div>scroll down</div>
                  <div><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                </div>
            </div>


        </div>

        <div class="section fp-auto-height">
            <div class="projects-container">
              <div style="margin: auto auto 20px auto; width:95%; text-align:center;">
                <h2>PROJECTS</h2>
              </div>
              <div class="projects-container-left">
                <p class="projects-container-left-text">This is a summary of the projects I've worked on.  Please
                feel free to ask me about them</p>
              </div>
              <div class="projects-container-right">
                  <div class="pcr-table">
                    <div class="pcr-table-cell">
                      <a href="http://gmplanner.webbmo.com">
                        <div class="pcr-table-cell-dark">
                          <div style="text-align:center;color:white; margin-top:30%;">
                            <i class="fa fa-eye pcr-table-cell-dark-i"></i>
                            gmPlanner
                          </div>
                        </div>
                      </a>
                        <img class="pcr-table-cell-container" src="/pictures/gmplanner.png">
                    </div>
                    <div class="pcr-table-cell">
                      <a href="http://itp.webbmo.com/">
                          <div class="pcr-table-cell-dark">
                            <div style="text-align:center;color:white; margin-top:30%;">
                              <i class="fa fa-eye pcr-table-cell-dark-i"></i>
                              itpUSA
                            </div>
                          </div>
                        </a>
                        <img class="pcr-table-cell-container" src="/pictures/itp.png">
                    </div>
                    <div class="pcr-table-cell">
                      <div class="pcr-table-cell-dark">
                        <div style="text-align:center;color:white; margin-top:30%;">
                          <i class="fa fa-eye-slash pcr-table-cell-dark-i"></i>
                        </div>
                      </div>
                        <img class="pcr-table-cell-container" src="/pictures/comming_soon.png">
                    </div>
                  </div>
              </div>
            </div>

        </div>



        <div class="section fp-auto-height">
          <!-- <div style="margin: auto auto 20px auto; width:95%; text-align:center;">
            <h2>PERSONAL INFORMATION</h2>
          </div> -->
            <div class="personal">
                <div class="personal-pic"></div>
                <div class="personal-container">
                    <div class="personal-container-text">
                      <p>My personal modus operandi is:  I believe obstacles, no matter how insurmountable they may appear, can be traversed through perseverance and dedication.
                      I commit whole heartily to everything I undertake, including helping others. I believe in justice and fairness,
                      I believe God gives strength to his people when they need it and blesses them greatly.
                      </p>
                      <p>
                        Doggie lover who also enjoys dancing Marinera Norteña.  Being a girl in a male dominated field has helped me grow professionally.
                        My favorite color is peach. I am a huge soccer fan and my favorite sports team is Football Club Barcelona.  I love spending time with
                        family and friends, and always try to find the time to see them.  I lived in the US for 20 years and recently moved to Peru, still adapting to the cultural differences but definitely worth the change.
                      </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="section">
          <div class="contact">
            <div style="margin: 8% auto 5% auto; width:95%; text-align:center;">
              <h2>CONTACT ME</h2>
            </div>
            <div class="contact-container">
              <div class="contact-icons">
                <a href="https://www.linkedin.com/in/brenda-castillo-illescas-18143a167">
                  <i class="fa fa-linkedin"></i>
                </a>
                <div class="contact-icons-text">LinkedIn</div>
              </div>
              <div class="contact-icons">
                <a href="https://www.instagram.com/bmci_816">
                  <i class="fa fa-instagram"></i>
                </a>
                <div class="contact-icons-text">Instagram</div>
              </div>
              <div class="contact-icons">
                <a href="mailto:brendamrl816@gmail.com">
                  <i class="fa fa-envelope"></i>
                </a>
                <div class="contact-icons-text">Email</div>
              </div>
            </div>

            <div class="resume-container">
              <!-- <iframe src="url=../pictures/BrendaCastillo_Resume.pdf&embedded=true"></iframe> -->
              <img class="resume-container-pdf" src="pictures/BrendaCastillo_Resume-1.png"><img>
              <img class="resume-container-pdf" src="pictures/BrendaCastillo_Resume-2.png"><img>

            </div>
          </div>
        </div>


    </div>




@endsection
