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
<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
          <div class="main col-md-12 col-sm-12 col-xs-12">
            <ul class="breadcrumb">
              <li><a href="#">Inicio</a></li>
              <li class="active">Acerca</li>
            </ul>
            <div class="jumbotron">
             <ul class="nav nav-tabs">
               <li class="active"><a href="#home" data-toggle="tab">¿Quienes Somos?</a></li>
               <li><a href="#profile" data-toggle="tab">Nuestra Meta</a></li>
               <li><a href="#vision" data-toggle="tab">Nuestra Vision</a></li>
               <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                   Dropdown <span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu">
                   <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                   <li class="divider"></li>
                   <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                 </ul>
               </li>
             </ul>
             <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade active in" id="home">
                 <p>
                    Somos una agencia de Marketing Digital con sedes en Ecuador y Venezuela. Contamos con un completo equipo de
                    expertos que están a la vanguardia de la comercialización, la tecnología, las comunicaciones y las relaciones
                    públicas.
                    En JPR Media Group combinamos soluciones orgánicas con las tecnologías más recientes, para proveer planes
                    estratégicos que salvaguarden la imagen de su marca, mientras se mantiene su mensaje corporativo consistente y se
                    promueven los aspectos positivos.
                    JPR Media Group, identificará, analizará y clasificará toda la información relacionada con su imagen, marca o
                    empresa que circula en la Web 2.0, utilizando tecnología de punta y conocimientos para diseñar estrategias efectivas
                    que nos permitan custodiar y proyectar su imagen. Contamos con talento humano que desarrolla métodos y
                    herramientas tecnológicas que aumentan la visibilidad de contenido relevante en la Web 2.0, alineado a su plan de
                    comunicaciones para potenciar el posicionamiento de su marca. Igualmente, mantenemos un monitoreo y
                    seguimiento constante de nuestros servicios para consolidar un resultado que satisfaga las expectativas de nuestro
                    cliente.
                  </p>
               </div>
               <div class="tab-pane fade" id="profile">
                 <p>
                   Ser generadores de prácticas innovadoras para lograr el
                   éxito deseado por el cliente a través de asesoría y
                   acompañamiento tecnológico integral y por un talento
                   humano de reconocida experiencia.
                 </p>
               </div>
               <div class="tab-pane fade" id="vision">
                 <p>
                   Ser una empresa de asesoría tecnológica, líderes a nivel
                   global, reconocidos por nuestra excelencia en servicios de
                   mercadeo digital y asesoramiento en crisis
                   comunicacionales.
                 </p>
               </div>
               <div class="tab-pane fade" id="dropdown1">
                 <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
               </div>
               <div class="tab-pane fade" id="dropdown2">
                 <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
               </div>
             </div>
              
              
            </div>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno
            </p>
          </div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-13" style="background-color: rgb(240, 240, 240);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SIGUENOS</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
              <a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="#"><i class="socicon socicon-twitter"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/prinick.narvaez"><i class="socicon socicon-facebook"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-googleplus" title="Google+" target="_blank" href="https://plus.google.com/u/0/+PrinickNarv%C3%A1ez"><i class="socicon socicon-googleplus"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="http://youtube.com/prinick96"><i class="socicon socicon-youtube"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="#"><i class="socicon socicon-instagram"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-pinterest" title="Pinterest" target="_blank" href="#"><i class="socicon socicon-pinterest"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-github" title="GitHub" target="_blank" href="https://github.com/prinick96"><i class="socicon socicon-github"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-behance" title="Behance" target="_blank" href="#"><i class="socicon socicon-behance"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-tumblr" title="Tumblr" target="_blank" href="#"><i class="socicon socicon-tumblr"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="#"><i class="socicon socicon-linkedin"></i></a>
          </div>
    </div>
</section>

<?php include(HTML_DIR .'overall/footer.php') ?>

</body>
</html>