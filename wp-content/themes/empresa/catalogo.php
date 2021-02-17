<?php
   /*
   * Template Name: catalogo
   * Description: template de multigradas
   */

?>
<?php
    include( get_template_directory() . '/bases/tops.php' );

?>

<script>
function ilumina (obj) {
  obj.style.filter='alpha(opacity=50)';
  obj.style.opacity=.7;
  obj.style.transition='all 0.2s ease';
 
}
function apaga (obj) {
  obj.style.filter='alpha(opacity=100)';
  obj.style.opacity=1;
  
}
</script>

<style>
@media only screen and (min-width: 711px) {

  #estandarIMG{
   height: 250px;
  width: 300px;
  }

div.celular {
 display: none;
}
}


@media only screen and (max-width: 711px) {
.ocultar{
   display: none;
}
}

@media only screen and (min-width: 1000px) {

div.celular {
 display: none;
}


}
</style>
<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container ">
            <br><br><br><br><br><br>
                <h1 class="header center red-text"><strong>CATÁLOGO FOTOGRÁFICO</strong></h1>
            </div>
        </div>
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/iconos/banner_08.jpg"></div>
    </div>

<!-- LA INSTALACIÓN DE LAS GRADAS ES FIRME Y SEGURA. -->  
<div class="section white">
      <div class="row container">
        <h4 class="header"><strong>Es un honor tenerlo como nuestro cliente.</strong></h4>
        <h5>
         <p class="back-text text-darken-3 lighten-3"><strong>CONOZCA nuestros productos en este Catálogo Fotográfico</strong>, es una exposición real instalada, allí podrá ver de cerca nuestros productos, si usted quiere un diseño especial y que no aparece en nuestro catalogo, no se preocupe, nosotros podemos hacerlo personalizado, rápidamente y sin dificultad, tenemos toda la capacidad de diseño y fabricación de las escaleras o gradas, las que usted necesite. </p>
         <br><br>
         
         

         <div class="col s12">
<div class="col s4">
<div class="ocultar">
<div class="card" >
        <div class="card-image">
          <a href="antejardines"><img src="<?php echo get_template_directory_uri(); ?>/img/Antejardines/1.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Antejardines</strong></p>
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
          <a href="tapadas"><img src="<?php echo get_template_directory_uri(); ?>/img/tapadas/1.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Tapada</strong></p>
        </div>
        </div>


        <div class="card" >
        <div class="card-image">
          <a href="techos"><img src="<?php echo get_template_directory_uri(); ?>/img/techos/1.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Techos</strong></p>
        </div>
        </div>

        </div>
</div>
<div class="col s4">
<div class="ocultar">
<div class="card" >
        <div class="card-image">
          <a href="balaustres"><img src="<?php echo get_template_directory_uri(); ?>/img/Balaustres/2.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Balaustres</strong></p>
        </div>
        </div>

        
        <div class="card" >
        <div class="card-image">
          <a href="mixta"><img src="<?php echo get_template_directory_uri(); ?>/img/mixta/1.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Mixta</strong></p>
        </div>
        </div>


        <div class="card" >
        <div class="card-image">
          <a href="all"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/3.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Todos los productos</strong></p>
        </div>
        </div>

      

        </div>
</div>
<div class="col s4">
<div class="ocultar">
<div class="card" >
        <div class="card-image">
          <a href="Paso-Libre"><img src="<?php echo get_template_directory_uri(); ?>/img/paso_libre/2.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Paso Libre</strong></p>
        </div>
        </div>


        <div class="card" >
        <div class="card-image">
          <a href="rejas&valcones"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg"  style=" height: 350px; filter:alpha(opacity=1); opacity:1" 
onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Rejas & Valcones</strong></p>
        </div>
        </div>


       
        </div>
</div>

</div>

      </h5>

    </div>
    </div>
   
    <div class="row s12 celular">
<ul class="collapsible">
    <li>
      <center>
    
      <div class="card" >
        <div class="card-image">
          <a href="antejardines"><img src="<?php echo get_template_directory_uri(); ?>/img/Antejardines/1.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Antejardines</strong></p>
        </div>
        </div>
     
    <br>
    
    <div class="card" >
        <div class="card-image">
          <a href="tapadas"><img src="<?php echo get_template_directory_uri(); ?>/img/tapadas/1.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Tapada</strong></p>
        </div>
        </div>

     <br>
  
        <div class="card" >
        <div class="card-image">
          <a href="techos"><img src="<?php echo get_template_directory_uri(); ?>/img/techos/1.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Techos</strong></p>
        </div>
        </div>

     <br>
    
     <div class="card" >
        <div class="card-image">
          <a href="balaustres"><img src="<?php echo get_template_directory_uri(); ?>/img/Balaustres/2.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Balaustres</strong></p>
        </div>
        </div>

     <br>
  
   <div class="card" >
        <div class="card-image">
          <a href="mixta"><img src="<?php echo get_template_directory_uri(); ?>/img/mixta/1.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Mixta</strong></p>
        </div>
        </div>

     <br>

     <div class="card" >
        <div class="card-image">
          <a href="Paso-Libre"><img src="<?php echo get_template_directory_uri(); ?>/img/paso_libre/2.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Gradas Paso Libre</strong></p>
        </div>
        </div>

     <br>
  
     <div class="card" >
        <div class="card-image">
          <a href="rejas&valcones"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Rejas & Valcones</strong></p>
        </div>
        </div>

     <br>
 
     <div class="card" >
        <div class="card-image">
          <a href="all"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/3.jpeg" id="estandarIMG" onmouseover="ilumina(this)" onmouseout="apaga(this)" ></a>
          <span class="card-title"></span>
          
        </div>
        <div class="card-content">
          <p class="center"><strong>Todos los productos</strong></p>
        </div>
        </div>
  
     </center>
    </li>
   
  </ul>
   </div>
<?php

    include( get_template_directory() . '/bases/bots.php' );
?>