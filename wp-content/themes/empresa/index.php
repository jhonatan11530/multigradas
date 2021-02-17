<?php
   /*
   * Template Name: index
   * Description: template de multigradas
   */

?>
<?php
    include( get_template_directory() . '/bases/tops.php' );

?>


<div class="slider">

  <ul class="slides">
  <li>
  <img src="<?php echo get_template_directory_uri(); ?>/iconos/banner_00.jpg" alt="Unsplashed background img 1"> <!-- random image -->
    </li>

    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/Antejardines/1.jpeg"> <!-- random image -->
      <div class="caption center-align">
        <h3 class="red-text "><strong>ANTEJARDINES</strong></h3>
        <h5 class="red-text ">Cerrajeria para antejardines.</h5>
        <a class="waves-effect waves-light btn-large red" href="antejardines">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/Balaustres/1.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h2 class="red-text "><strong>BALAUSTRES</strong></h2>
        <h5 class="red-text ">balaustre para el hogar.</h5>
        <a class="waves-effect waves-light btn-large red" href="balaustres">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/paso_libre/1.jpeg"> <!-- random image -->
      <div class="caption right-align">
        <h2 class="red-text "><strong>GRADAS PASO LIBRE</strong></h2>
        <h5 class="red-text ">Gradas en espiral redonda.</h5>
        <a class="waves-effect waves-light btn-large red" href="Paso-Libre">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/tapadas/1.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h2 class="red-text "><strong>GRADAS TAPADAS</strong></h2>
        <h5 class="red-text ">Grada redonda tapada.</h5>
        <a class="waves-effect waves-light btn-large red" href="tapadas">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/mixta/1.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h2 class="red-text "><strong>GRADAS MIXTAS</strong></h2>
        <h5 class="red-text ">gradas caracol estilo tapada.</h5>
        <a class="waves-effect waves-light btn-large red" href="mixta">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h2 class="red-text "><strong>REJAR Y VALCONES</strong></h2>
        <h5 class="red-text ">Cerrajeria para pasamanos,puertas y ventanas.</h5>
        <a class="waves-effect waves-light btn-large red" href="rejasvalcones">Mirar Catalogo</a>
      </div>
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/techos/1.jpeg"> <!-- random image -->
      <div class="caption left-align">
        <h2 class="red-text "><strong>TECHOS</strong></h2>
        <h5 class="red-text ">Construcción de estructura.</h5>
        <a class="waves-effect waves-light btn-large red" href="techos">Mirar Catalogo</a>
      </div>
    </li>

  </ul>
</div>

<div id="index-banner" class="parallax-container">

        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/iconos/cerrajero.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="section white">
      <div class="row container">
      <center>
      <h3><strong>Nuestro Equipo</strong></h3>
      <br>
      <h5>
      <p>Contamos con un equipo de trabajo y de desarrollo altamente capacitado en el ámbito de Contruccion.</p>
      </h5>
      </center>
      <div class="carousel carousel-slider">
      <a class="carousel-item" href="#home!"><img src="<?php echo get_template_directory_uri(); ?>/iconos/banner_01.jpg" alt="Unsplashed background img 1"></a>
    <a class="carousel-item" href="#one!"><img src="<?php echo get_template_directory_uri(); ?>/iconos/empleados1.jpg" alt="Unsplashed background img 1"></a>
    <a class="carousel-item" href="#two!"><img src="<?php echo get_template_directory_uri(); ?>/iconos/empleados2.jpg" alt="Unsplashed background img 1"></a>
    <a class="carousel-item" href="#three!"><img src="<?php echo get_template_directory_uri(); ?>/iconos/empleados3.jpg" alt="Unsplashed background img 1"></a>
  </div>
      </div>
    </div>
    
    <div id="index-banner" class="parallax-container">

        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/7.jpeg" alt="Unsplashed background img 1"></div>
</div>
<?php

    include( get_template_directory() . '/bases/bots.php' );
?>