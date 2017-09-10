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
<?php include(HTML_DIR . 'overall/carousel.php') ?>
 <section class="section2">
   <div class="container">
     <div class="row grid-divider">
       <div class="col-md-6 col-xs-12  grid-item1">
        <div class="icon-wrap"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
        <h4>Presencia en Internet y Medios</h4>
        <h2>Marketing Digital Avanzado</h2>
        <p>Hacemos crecer tu marca y aumentar tus ventas llevandote de la mano en cada paso por el mundo digital.</p>
        <a href="" class="catalogo">Ver catalogo</a>
        <a href="" class="contact">¡Contáctenos!</a>
       </div>
       <div class="col-md-6 col-xs-12 grid-item2">
        <div class="icon-wrap"><i class="fa fa-check-circle" aria-hidden="true"></i></div>
        <h4>Desarrollamos esa idea que tienes</h4>
        <h2>Componentes Web de medio y alto nivel</h2>
        <p>Desarrollamos sitios web dependiendo de tus necesidades, con arquitectura mobile-first para poder adaptarlos a celulares.</p>
        <a href="" class="catalogo">Ver catalogo</a>
        <a href="" class="contact">¡Contáctenos!</a>
       </div>
     </div>
   </div>
 </section>
 <!--
<section>
  <?php include(HTML_DIR . 'overall/thumbnails.php') ?>
</section>
-->
  <?php include(HTML_DIR . 'overall/description.php'); ?>

  <?php include(HTML_DIR . 'overall/service.php'); ?>

  <?php include(HTML_DIR . 'overall/ofrecemos.php'); ?>






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
