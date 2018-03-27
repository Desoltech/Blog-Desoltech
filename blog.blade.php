<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Desoltech - Desarrollo de Soluciones Tecnológicas</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <meta property="og:url"           content="http://www.desoltech.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Desoltech" />
  <meta property="og:description"   content="Desarrollo de Soluciones Tecnológicas" />
  <meta property="og:image"         content="http://desoltech.com/img/logo_desoltech.png" />

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="img/desoltech_ico.png" rel="shortcut icon">

  <!-- Google Fonts 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
-->
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>
  <div id="preloader"></div>


  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo_desoltech.png" alt="Desoltech" >
        </div>
        <font color="black" size="10">Bienvenido al Blog de Desoltech</font>
        <h2 >Desarrollamos <span class="rotating"> Soluciones Tecnológicas para mejorar tu mundo</span></h2>
        <div class="actions">
          <a href="{{url('login')}}" class="btn-get-started">Plataforma</a>
          <a href="#services" class="btn-get-started">Nuestros Servicio</a>
          <a href="{{url('blog')}}" class="btn-get-started">Blog</a>
        </div>
      </div>
    </div>
  </section>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      	<h2  href="#">Blog-Desoltech</h2>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#temas">Temas de Debates</a></li>
           <li class="menu-has-children"><a>Plataforma</a>
            <ul>
              <li><a href="{{url('login')}}">Ingreso</a></li>
              <li><a href="{{url('register')}}">Registrarse</a></li>
              <li class="menu-has-children"><a href="#">Videos Tutuoriales</a>
                <ul>
                  <li><a href="https://www.youtube.com/watch?v=pUBLqJf6wh0"  target="blank">Desoltech TICs</a></li>
                  <li><a href="https://www.youtube.com/watch?v=lDp3VktRUgQ&t=170s" target="blank">Sacando Autorizaciones del SRI</a></li>
                  <li><a href="https://www.youtube.com/watch?v=7t4vDMn3880"  target="blank">Servicio de Imprentas</a></li>
                  <li><a href="https://www.youtube.com/watch?v=d2UwuVO0NWI&t=19s"  target="blank">Tecnología en mi Negocio</a></li>
                  <li><a href="https://www.youtube.com/watch?v=aWrOPuGpVEg">Tarjetas de Presentación</a></li>
                </ul>
              </li>
              <li><a href="#">Que es SAAS....?</a></li>
            </ul>
          </li>
           @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                @endif
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->


@if (Auth::guest())
  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Suscríbete para estar enterado de los nuevos Servicios, Productos, Capacitaciones y Promociones.</h3>
          <p class="subscribe-text">Para a ello te invitamos a registrarte a nuestra plataformas, existen 129 Usuarios Suscrito..!!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="{{url('register')}}">Regístrate Ahora!</a>
        </div>
      </div>
    </div>
  </section>
@endif


<!-- aqui va el cuepor que vayas a poner OK -->










<!-- fin del cuerpo a poner  OK -->
  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contactanos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Puedes escribirnos un correro o puedes proceder a registarte en nuestra plataforma y comunicarte directamente con nosotros</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Av. 10 de Agosto y Luis Tufiño - Av Maldonado (Guajalo)<br>Quito - Ecuador</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@desoltech.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+593 997 387 176 <br>
               +593 993 388 006</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tu  Mensaje ha sido enviado, Gracias..!</div>
            <div id="errormessage"></div>
            <form action="{{url('enviarCorreo')}}" method="post" role="form" class="contactForm">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <input required type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:6" data-msg="Por Favor Ingresa Un Nombre y Apellido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input required type="email" class="form-control" name="email" id="email" placeholder="Su Email" data-rule="email" data-msg="Por Favor Ingrese un Email Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input required type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Por Favor Ingresa minimo 4 Caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea required class="form-control" name="message" rows="5" data-rule="required" data-msg="Por Favor detalle su Mensaje" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
      <br>
            <div align="center" class="row">
      
              <div class="fb-share-button col-md-3 col-md-push-2" 
                    data-href="http://desoltech.com/" 
                    data-layout="button_count" >
              </div>
             <div class="fb-like col-md-3 col-md-push-2" 
                data-href="https://www.facebook.com/desoltechSoftware/" 
                data-layout="button_count" 
                data-action="like" 
                data-show-faces="false">
              </div>
        
<div  class="col-md-3 col-md-push-2">
<a href="https://api.whatsapp.com/send?phone=593997387176&text=Hola%20Desoltech,%20te%20escribo%20por%20que%20estoy%20interesado%20en%20que%20me%20ayudes%20con%20más%20información%20sobre%20sus%20Servicios?%20Gracias%20por%20tu%20ayuda%20estare%20pendiente%20de%20tu%20respuestas..!!
"> Escribenos

<img src="img/desoltech_whastsapp.png" width="10%"></a></div>



              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
        </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            Desarrollado por <strong> <a href="#team">Carlos Zambrano</a></strong>. 
          </div>
          <div class="credits">
            Software - Desoltech 
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
