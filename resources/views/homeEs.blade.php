@extends('master')

@section('content')


    <div class="preloader">
      <div style="font-size:200%;">Brenda Castillo</div>
      <div class="preloader-dot-container">
        <div id="pl-dot1-es" class="loader-dot" style="background-color:#eab2bc;"></div>
        <div id="pl-dot2-es" class="loader-dot" style="background-color:#80c5ac;"></div>
        <div id="pl-dot3-es" class="loader-dot" style="background-color:#b890c5;"></div>
        <div id="pl-dot4-es" class="loader-dot" style="background-color:#74abc5;"></div>
        <div id="pl-dot5-es" class="loader-dot" style="background-color:#c7843f;"></div>
        <div id="pl-dot6-es" class="loader-dot" style="background-color:#9fb361;"></div>
      </div>


    </div>
     <button class="nav-button hide" onclick="toggleNavButton(event)"><i class="fa fa-bars" aria-hidden="true"></i></button>

      <div class="divMenu hide">
          <ul id="myMenu">
              <li data-menuanchor="home" class="active nav-li"><a class="nav-a" href="#home">PRINCIPAL</a></li>
              <li data-menuanchor="career" class="nav-li"><a class="nav-a" href="#career">PROYECTOS</a></li>
              <li data-menuanchor="personal" class="nav-li"><a class="nav-a" href="#personal">PERSONAL</a></li>
              <li data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTÁCTAME</a></li>
          </ul>
      </div>


      <!-- **************************************************languages******************************************* -->

        <div class="language language-position hide">
          <a href="en"><button class="language-button">English</button></a>
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
                          <h1>Hola, bienvenidos al Portafolio de Brenda Castillo</h1>
                          <p>
                            Soy una programadora de sofware. Echa un vistazo a mi trabajo, visita mis redes sociales,
                            mira mi currículum y aprende cómo contactarme.
                          </p>
                          <p>
                            Gracias por la visita!
                        </p>
                        </div>
                    </div>
                </div>
                <div class="arrow">
                  <div>hacia abajo</div>
                  <div><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
                </div>
            </div>


        </div>

        <div class="section fp-auto-height">
            <div class="projects-container">
              <div style="margin: auto auto 20px auto; width:95%; text-align:center;">
                <h2>PROYECTOS</h2>
              </div>
              <div class="projects-container-left">
                <p class="projects-container-left-text">
                Este es un resumen de los proyectos en los que he trabajado. Por favor
                no dudes en preguntarme sobre ellos</p>
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
                      <p>
                        Mi modus operandi personal es: creo que los obstáculos, por insuperables que puedan parecer, pueden atravesarse con perseverancia y dedicación.
                      Me comprometo de todo corazón a todo lo que emprendo, incluida la ayuda a los demás. Creo en la justicia y la equidad.
                      Creo que Dios da fuerza a su pueblo cuando lo necesitan y los bendice enormemente.
                      </p>
                      <p>
                        Amante de los perros que también disfruta bailando Marinera Norteña. Ser mujer en un campo dominado por hombres me ha ayudado a crecer profesionalmente.
                        Mi color favorito es el durazno. Soy un gran fan del fútbol y mi equipo deportivo favorito es el Football Club Barcelona. Me encanta pasar tiempo con
                        familiares y amigos, y siempre trato de encontrar el tiempo para verlos. Viví en los Estados Unidos durante 20 años y recientemente me mudé a Perú, aún adaptándome a las diferencias culturales, pero definitivamente valió la pena el cambio.
                      </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="section fp-auto-height">
          <div class="contact">
            <div style="margin: 8% auto 5% auto; width:95%; text-align:center;">
              <h2>CONTÁCTAME</h2>
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

            <div class="resume-pdf hide">
              <a href="/pictures/BrendaCastillo_CV.pdf" download>
                <button class="resume-pdf-button">Descarga mi currículum</button>
              </a>
            </div>

            <div class="resume-container">
              <!-- <iframe src="url=../pictures/BrendaCastillo_Resume.pdf&embedded=true"></iframe> -->
              <img class="resume-container-pdf" src="pictures/BrendaCastillo_CV-1.png"><img>
              <img class="resume-container-pdf" src="pictures/BrendaCastillo_CV-2.png"><img>

            </div>
          </div>
        </div>


    </div>




@endsection
