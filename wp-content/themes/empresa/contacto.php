<?php
   /*
   * Template Name: Contacto
   * Description: template de multigradas
   */

?>
<?php
    include( get_template_directory() . '/bases/tops.php' );

?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container ">
            <br><br><br><br><br><br>
                <h1 class="header center red-text"><strong>CONTÁCTENOS</strong></h1>
            </div>
        </div>
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/iconos/contacto.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="section white">
      <div class="row container">
      <img src="<?php echo get_template_directory_uri(); ?>/iconos/secretaria.jpg" alt="Unsplashed background img 1" style="width:550px;">
       <h5>
         <p class="grey-text text-darken-3 lighten-3"><strong>Gracias por elegirnos, usted puede confiar en nuestro profesionalismo, experiencia, idoneidad, honestidad y seriedad. Garantizamos nuestros productos y servicios.</strong></p>
      <br>
      <p class="grey-text text-darken-3 lighten-3">Utilice la vía de comunicación mas adecuada para usted.
        Si desea mas información, Chatee con nosotros, llámenos o envíenos un correo y le pondremos en contacto con nuestro asesor y representante de ventas.
        </p>
        <br>
        <p class="grey-text text-darken-3 lighten-3"><strong>Nuestra empresa: Multi Gradas SAS</strong></p>
        <p class="grey-text text-darken-3 lighten-3"><strong>Dirección: </strong> Carrera 49 B No. 45-20  /  Barrio Mariano Ramos</p>
        <p class="grey-text text-darken-3 lighten-3"><strong>Teléfonos: </strong>(+57 2) 328 63 43 / 400 51 10 </p>
        <p class="grey-text text-darken-3 lighten-3"><strong>Celular Móvil. WhatsApp: </strong> (+57) 315 724 26 48</p>
        <p class="grey-text text-darken-3 lighten-3"><strong>Email: </strong> multi-gradas@hotmail.com</p>
        <p class="grey-text text-darken-3 lighten-3" ><strong>Pagina Web: </strong><a href="#">www.multigradas.com.co/</a></p>


      </h5>
      </div>
    </div>

    <div class="section white">
      <div class="row container">
      <center>
        <h4 class="header"><strong>Escribanos.</strong></h4>
        </center>
        <div class="row">

    <form class="col s12" action="https://multigradas.com.co/Validate.php" method="POST">
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input  id="first_name" name="nombre" type="text" class="validate">
          <label for="first_name">Nombres</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="apellido" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" name="Telefono" type="tel" class="validate">
          <label for="icon_telephone">Telefono</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">mail</i>
          <input id="email" name="correo" type="email" class="validate">
          <label for="email">Correo</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
          <textarea id="textarea2" name="mensaje" class="materialize-textarea" data-length="300" ></textarea>
          <label for="textarea2">Mensaje o Asunto</label>
          <span class="helper-text" data-error="usted supero el limite de 300 caracteres" data-success="mensaje valido">escriba su mensaje</span>
        </div>
      </div>

    <center>
    <div class="g-recaptcha" data-sitekey="6LdPAAEVAAAAAKje-NOqg-RhUZpKATrb8_cpfJZT"></div>
    <button class="btn waves-effect waves-light red" type="submit" name="action">ENVIAR
        <i class="material-icons right">send</i>
    </button>
    </center>
    </form>
  </div>

      </div>
    </div>

<script>
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
        
</script>
<?php

    include( get_template_directory() . '/bases/bots.php' );
?>