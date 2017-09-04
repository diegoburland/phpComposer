<?php include(HTML_DIR . 'overall/header.php') ?>

<body>
<section class="engine"><a rel="nofollow" href="#">JPR Media Group</a></section>

<?php include(HTML_DIR . 'overall/nav.php'); ?>

<div class="modal fade" id="Login" role="dialog">
   <div class="modal-dialog">

     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h4>
       </div>
       <div class="modal-body">
         <div role="form">
           <div class="form-group">
             <label for="usrname_or_email"><span class="glyphicon glyphicon-user"></span> Usuario o Email</label>
             <input type="text" class="form-control" id="user_login" placeholder="Introducir Email">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
             <input type="text" class="form-control" id="pass_login" placeholder="Introducir Contraseña">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" value="1" id="session_login" checked>Recordarme</label>
           </div>
           <button type="button" class="btn btn-default btn-success btn-block" id="iniciar_sesion"><span class="glyphicon glyphicon-off"></span> Iniciar Sesión</button>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
         <p>¿No estás registrado? <a data-toggle="modal" data-target="#Registro">Registrate!</a></p>
         <p>Contraseña <a data-toggle="modal" data-target="#Lostpass">perdida?</a></p>
       </div>
     </div>
   </div>
 </div>
<section style="background-image: url('views/app/images/background.jpg');
  background-repeat: no-repeat;
  background-size: cover;
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover; margin-bottom: 40px;" class="mbr-section mbr-after-navbar ritu" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
            <div class="row">
                <!-- Carousel -->
                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container-fluid">
                                <div class="row spacer-md">
                                    <div class="col-sm-12 col-md-6 col-md-offset-1">
                                        <!-- Slide 1...-->
                                        <div class="animated fadeInLeftBig slide-delay-2">
                                          <h1 style="color:white; font-size: 40px;" class="WhiteText content-right">Marketing Digital</h1>
                                          <ul>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                          </ul>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <div class="animated fadeInRightBig text-center">
                                            <img width="330px" src="views/app/images/marketing2.png" alt="" class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">

                                <div class="row spacer-md">

                                    <!-- Slide 2...-->
                                    <div class="col-sm-12 col-md-5 col-md-offset-1">
                                        <img class="img-responsive animated rollIn" src="views/app/images/redes.jpg" alt="" />
                                    </div>

                                    <div class="col-sm-12 col-md-6">

                                        <div class="content-right animated rotateInDownRight slide-delay-2">
                                            <h2 style="color:white; font-size: 30px;" class="WhiteText content-right">Gestion de Social Network</h2>
                                            <ul>
                                              <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                              <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                              <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="container">

                                <div class="row spacer-md">
                                    <div class="col-sm-12 col-md-5 col-md-offset-1">

                                        <!-- Slide 3...-->
                                        <div class="content-left animated bounceInLeft slide-delay-2">
                                             <h2 style="color:white; font-size: 40px;" class="WhiteText content-right">Desarrollo Web</h2>
                                             <ul>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                          </ul>
                                        </div>

                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <img class="img-responsive animated bounceInDown" src="views/app/images/web.png" alt="" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">

                                <div class="row spacer-md">

                                    <!-- Slide 4...-->
                                    <div class="col-sm-12 col-md-5 col-md-offset-1">
                                        <img class="img-responsive animated lightSpeedIn" src="views/app/images/seo.png" alt="" />
                                    </div>

                                    <div class="col-sm-12 col-md-6">

                                        <div class="content-right animated rotateInDownRight slide-delay-2">
                                             <h2 style="color:white; font-size: 30px;" class="WhiteText content-right">Posicionamiento en Google</h2>
                                             <ul>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                            <li style="list-style: none; line-height: 50px; color: white; font-size: 25px; font-weight: bold;">Lorem ipsum dolor sit amet.</li>
                                          </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <center> 
                    <!-- button Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2" ></li>
                        <li data-target="#my-carousel" data-slide-to="3" ></li>
                    </ol>

                    </center>
                  
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
<section>
  <?php include(HTML_DIR . 'overall/thumbnails.php') ?>
</section>
<section class="sliderclients">
  <?php include(HTML_DIR . 'overall/slider.php') ?>
</section>




<section class="" id="social-buttons2-13" style="background-color: rgb(240, 240, 240);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SIGUENOS</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
              <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/prinick.narvaez"><i class="socicon socicon-facebook"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="http://youtube.com/prinick96"><i class="socicon socicon-youtube"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="#"><i class="socicon socicon-instagram"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-github" title="GitHub" target="_blank" href="https://github.com/prinick96"><i class="socicon socicon-github"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="#"><i class="socicon socicon-linkedin"></i></a>
          </div>
    </div>
</section>

<?php include(HTML_DIR .'overall/footer.php') ?>

</body>
</html>
