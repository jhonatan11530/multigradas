<?php
   /*
   * Template Name: Todos los productos
   * Description: template de multigradas
   */

?>

<?php
    include( get_template_directory() . '/bases/tops.php' );

?>
<div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container ">
            <br><br><br><br><br><br>
                <h1 class="header center blue-text"><strong>TODOS LOS PRODUCTOS</strong></h1>
            </div>
        </div>
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg"></div>
    </div>
 
    <div class="section white">
      <div class="row container">
        <center>
        <h4 class="header"><strong>Catálogo Fotografico Todos.</strong></h4>
        </center>
      </div>
    </div>

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
    
    <?php
/*
$mysqli = mysqli_connect("localhost", "multig_ArelisSilva", "&)3S)8eA3akB",'multig_radasArelis');
$valor = "image/jpeg";
$sql_statement = "SELECT * FROM mgwp_posts WHERE post_mime_type ='".$valor."' ";
$result = mysqli_query($mysqli, $sql_statement);
while ($data=mysqli_fetch_array($result))
{
  
echo '<div class="card-image" >
<img class="materialboxed" src="'.$data['guid'].'" style="height: 300px;">
<span class="card-title"></span>
</div>
</div>';
}
*/
?>

<div class="row s12 pantalla">

<div class="col s12">
<div class="col s4">
<div class="ocultar">
<div class="card" >

        <div class="card-image" >
          <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg" style="height: 300px;">
          <span class="card-title"></span>
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/2.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/3.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

        
       
</div>
</div>

<div class="col s4">
<div class="ocultar">
<div class="card" >

        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/4.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/5.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/5.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

</div>
</div>

<div class="col s4">
<div class="ocultar">
<div class="card" >

        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/6.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>

        <div class="card" >
        <div class="card-image">
        <img class="materialboxed" src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/7.jpeg" style="height: 300px;">
          <span class="card-title"></span>
          
        </div>
        </div>


</div>
</div>
</div>

</div>
 


<div class="row s12 celular">
<ul class="collapsible">
    <li>
      <center>
     <img class="materialboxed responsive-img"
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/1.jpeg" id="estandarIMG">
     
    <br>
     <img class="materialboxed responsive-img"
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/2.jpeg" id="estandarIMG">
     <br>
  
     <img class="materialboxed responsive-img" 
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/3.jpeg" id="estandarIMG">
     <br>
    
     <img class="materialboxed responsive-img"
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/4.jpeg" id="estandarIMG">
     <br>
  
     <img class="materialboxed responsive-img"
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/5.jpeg" id="estandarIMG">
     <br>
  
    <img class="materialboxed responsive-img"
    src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/6.jpeg" id="estandarIMG">
    <br>
  
     <img class="materialboxed responsive-img"
     src="<?php echo get_template_directory_uri(); ?>/img/rejas_y_valcones/7.jpeg" id="estandarIMG">
     <br>
     </center>
    </li>
   
  </ul>
   </div>
<?php

    include( get_template_directory() . '/bases/bots.php' );
?>