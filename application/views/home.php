<div class="container" style="margin-top: 10px">
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-coupon">
        <h4 style="color: #1a8fa8">Oferta especial Descsadasduento 20%</h4>
        <p>Utiliza el código <b>bordincliente</b> y accede automáticamente al descuento. <span class="text-muted">Solo clientes registrados.</span> </p>
      </div>  
    </div>
    
    <div class="col-md-6">
      <div class="alert alert-coupon">
        <h4 style="color: #b42e96">Oferta especial Descuento 10%</h4>
        <p>Utiliza el código <b>bordintex</b> y accede automáticamente al descuento. <span class="text-muted">Todo el público.</span> </p>
      </div>  
    </div>
  </div>
</div>


<!--BARRA DE BUSQUEDA <div class="row boxbusqueda"> <div class="input-group"> <input type="text" class="form-control" placeholder="Busca en BordinTex" aria-describedby="basic-addon1"> <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span> </div></div> TERMINA BARRA BUSQUEDA -->



<div class="container" style="margin-left: -1px; margin-bottom: -20px;"> <div class="row" > <div class="col-md-12" > <h2 class="font-titulos">Conoce nuestros <b style="color: #fb10be">Productos</b> y <b style="color: #c325ab">Servicios</b> en <b>Bordados</b>...</h2> </div> </div></div>




 <div class='list-group gallery' style="margin-bottom: -40px;">
   <div class="row">
      <section class="variable slider">
          <?php foreach ($subcategorias as $pro): ?>
                              <div >
                                      <a style="cursor: pointer;"  rel='ligthbox' onclick="mostrarProductos('<?=$pro['N_SUBCAT'];?>');">
                                          <img src="<?=base_url();?>public/subcategorias/<?php echo $pro['SUBCATIMG']; ?>" alt="<?php echo $pro['N_SUBCAT']; ?>" class="img-responsive">
                                      </a>
                                      <a  onclick="mostrarProductos('<?=$pro['N_SUBCAT']?>')" style="color: #334f6f; font-family: 'Lobster'; cursor: pointer;margin-right: 14px;font-size: 20px;" ><?=$pro['N_SUBCAT']?></a></h3>
                              </div>
          <?php endforeach?>
      </section><!-- CC I E R R A  CEGORIAS -->
      </div>
</div>

    <div class="container">
      <div class="row" style="text-align: center;">
        <div id="productos" class="row productos " style="display: none; margin-left: 20px;margin-right: 20px;" >

        </div>
      </div>
    </div>

<!--Contactos-->
<div class="container" style="margin-left: -1px; margin-bottom: -10px;"> <div class="row" > <div class="col-md-12" > <h2 class="font-titulos"><i class="fa fa-heart" aria-hidden="true"></i>
Comunicación Efectiva<b style="color: #c325ab"> Cotiza con nosotros</b></h2> </div> </div></div>
<div class="container" style="margin-top: 10px">
  <div class="row">
     
    <div class="col-md-6">
        <div class="alert alert-coupon">
           <center>
                <p>Utiliza el <a style="color: blue" href="https://www.bordintex.com/contacto/"><u>Cotizador Específico de Bordados</u></a> para casos especiales de cotización, ó simplemente utilizalo
                para contactarte con nosotros.</p>
                <a href="https://www.bordintex.com/contacto/"><img src="https://www.bordintex.com/public/images/contactoimg.jpeg" class="img-responsive"></a>
            </center>
        </div>
    </div>
    <div class="col-md-6">
        <div class="alert alert-coupon">
           <center>
                <p>Utiliza el <a style="color: blue" href="https://www.bordintex.com/cotizar/"><u>Cotizador General de Bordados</u></a> para cotizar tu bordado de manera <u><b>gráfica y facíl</b></u> en prendas tradicionales como: camisetas, chompas, buzos y sudaderas.</p>
                <a href="https://www.bordintex.com/cotizar/"><img src="https://www.bordintex.com/public/images/seocgeneral.png" class="img-responsive"></a>
            </center>
        </div>
    </div>
     <div class="col-md-12">
          <center><h4 class="text-muted"><b>En Bordintex creemos fuertemente en la comunicación con sus clientes, si podemos ayudarte en cualquier solicitud que tuvieras, 
          estamos encantados de poder responderte. </h4></center>
      </div>
  </div>
</div>

<!--- ENCABEZADO PRODUCTS-->
<div class="container" style="margin-left: -1px; margin-bottom: -10px;"> <div class="row" > <div class="col-md-12" > <h2 class="font-titulos"><i class="fa fa-heart" aria-hidden="true"></i>
Productos Especiales<b style="color: #c325ab">Personalizaciones creativas</b></h2> </div> </div></div>
<center><h4 class="text-muted"><b>¡Nunca estás solo!</b> Nuestro sistema te informa el estado de tu pedido a todo momento</h4></center>
<center><h4 class="text-muted">Todas las personalizaciones de su pedido son atendidas de manera personalizada para garantizar la máxima calidad.</h4></center>

<!-- SECCIÓN PRODUCTOS-->
<div class="gallery">
<section >
<div class="row">

    <?php $cont=0; foreach ($seccionCarro as $pro => $value): ?>
    
    <?php foreach ($value as $pre => $value2): ?>
      
    <?php $descuento=50; $precio=$value2['PRECIO']; $vDto=bcmul($precio,bcdiv($descuento,100,2),2); $totalA=bcadd($vDto, $precio, 2); ?>
      <?php if($cont==0): $cont++;?>

      <div  class="col-md-5 col-sm-5 col-xs-12">
              <a style="background-color: #b36fc200;" class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>public/productos/<?php echo $value2['PROIMG']; ?>">
              <img  class="img-responsive"  alt="" src="<?=base_url();?>public/productos/<?php echo $value2['PROIMG']; ?>">
              </a>

              <div class="text-right" style="margin-top: -19px;">
                <small class="text-muted" style="font-size: 15px;"><?php echo $value2['N_PROD']; ?></small>
              </div>

              <div class="text-right" style="margin-top: -4px;"> 
                <small class="text-muted" style="font-size: 15px;"><font style="color: orange">
                  <b>Antes: </b>$<strike><?=$totalA;?></strike></font>
                </small> 
              </div>
              
              <div class="text-right" style="margin-top: -8px;">
                <i class="fa fa-money"></i> 
                <small class="font-titulos">$<?php echo $value2['PRECIO']; ?></small>
              </div>

              <div class="row">
                <div class="text-right" style="margin-top: -1px; margin-bottom: 10px; margin-right:12px">
                  <button id="producto<?php echo $value2['ID_PROD']; ?>" class="btn btn-success" onclick="addProduct(<?php echo $value2['ID_PROD']; ?>)">Añadir al carrito</button> 
                </div>
              </div>
      </div>

      <div  class="col-md-7 col-sm-7 col-xs-12">
     
    <?php else:?>
      
     <div id="productosEspeciales" class="col-md-3 col-sm-3 col-xs-6">

       <div id="imagenProducto">
          <a style="background-color: #b36fc200;" class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>public/productos/<?php echo $value2['PROIMG']; ?>">
            <img  height="150" class="img-responsive" alt="" src="<?=base_url();?>public/productos/<?=ucwords(strtolower($value2['PROIMG']));  ?>">
          </a>
        </div>
            
        <div id="nombreProducto" >
              <small class="text-muted"><?php echo $value2['N_PROD']; ?></small>
        </div>

         <div id="precioAnterior" class="text-right" > 
                    <small class="text-muted" ><font style="color: orange">
                      <b>Antes: </b>$<strike><?=$totalA;?></strike></font>
                    </small> 
          </div>

          <div id="precioAhora" class="text-right" >
              <i class="fa fa-money"></i> 
              <small class="font-titulos">$<?php echo $value2['PRECIO']; ?></small>
          </div>

          
            <div id="botonComprar" class="text-right" >
              <button id="producto<?php echo $value2['ID_PROD']; ?>" class="btn btn-success" onclick="addProduct(<?php echo $value2['ID_PROD']; ?>)">Añadir al carrito</button> 
            </div>
          

    </div>    
    <?php endif?>
    <?php endforeach?>
    <?php endforeach?>
    </div>
    </div>

  
</section><!-- CC I E R R A  PRODUCTOS MOST SOLD -->
</div>




<!--- ENCABEZADO-->
<div class="container" style="margin-left: -1px; margin-bottom: -10px;"> <div class="row" > <div class="col-md-12" > <h2 class="font-titulos"><i class="fa fa-heart" aria-hidden="true"></i>
Servicio de <b style="color: #c325ab">Bordados computarizados</b></h2> </div> </div></div>


<!--- Nueva Sesccion-->

<div class="case-study-gallery" style="margin-top: 0px;">
<div class="case-study study1">
  <div class="case-study__overlay">
    <h2 class="case-study__title">bordados computarizados para tu ropa, ¡Se te verán Increibles!</h2>
    <a class="case-study__link" href="https://bordintex.com/blog/wp-content/uploads/2017/08/PortadaPost.png">Leer publicación</a>
  </div>
</div>

<div class="case-study study2">
  <div class="case-study__overlay">
    <h2 class="case-study__title">10+ Ideas Maravillosas de Bordados</h2>
    <a class="case-study__link" href="https://bordintex.com/10-ideas-maravillosas-bordados-26/">Leer publicación</a>
  </div>
</div>





</div>




  <!--Termina Seccion-->

<div class="row visible-md-block visible-lg-block visible-sm-block" style="background-color: #4e2c43e6; color: white" >
  <div class="col-xs-6 col-md-3 text-center">
    <p style="margin-bottom: -7px;" class="f-serv-main">250.000</p>
    <span class="f-copyr">Diseños de Bordados</span>
  </div>

  <div class="col-xs-6 col-md-3 text-center">
    <p style="margin-bottom: -7px;" class="f-serv-main">40.000</p>
    <span class="f-copyr">Horas de Trabajo</span>
  </div>

  <div class="col-xs-6 col-md-3 text-center">
    <p style="margin-bottom: -7px;" class="f-serv-main">1.500</p>
    <span class="f-copyr">Ideas de diseños creadas.</span>
  </div>

  <div class="col-xs-6 col-md-3 text-center">
    <p style="margin-bottom: -7px;" class="f-serv-main">480</p>
    <span class="f-copyr">Colaboraciones a nivel Mundial.</span>
  </div>
</div>

<div class="row"> </div> <div class="row">  <div class="col-md-6"> <div class="row" style="margin-left: 20px; margin-right: 20px"> <h2 class="font-titulos" >Servicio de bordados a empresas y particulares </h2> <div class="embed-responsive embed-responsive-16by9" > <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-_vAAiq0t44" height="25%"></iframe> </div> </div> </div> <div class="col-md-6"> <div class="row" style="margin-left: 20px; margin-right: 20px"> <h3 class="font-titulos" >Algunos de Nuestros Felices Clientes</h3> <div class="carousel slide testimonials" id="testimonials1"> <ol class="carousel-indicators" style="margin-top: 0px;margin-bottom: -9px;"> <li class="" data-slide-to="0" data-target="#testimonials-rotate"> </li> <li data-slide-to="1" data-target="#testimonials1" class="active"> </li> <li data-slide-to="2" data-target="#testimonials1" class=""> </li> </ol> <div class="carousel-inner"> <div class="item active"> <div class="col-md-12"> <p style=" background-color: rgba(88, 128, 208, 0.12); padding-left: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px; text-align: justify" > Wooooooaaaaaaoooo! Encerio compartire con mis amistades, excelente trabajo que hicieron conmigo, éxitos! </p> <div class="testimonial-info"> <img alt="" src="<?php echo base_url(); ?>public/img/profiles/1.jpg" class="img-circle " height="100"> <span class="testimonial-author"> Eddy - DJ Evolution <em> </em> </span> </div> </div> <div class="clearfix"></div> </div>
<div class="item "> <div class="col-md-12"> <p style=" background-color: rgba(88, 128, 208, 0.12); padding-left: 10px;padding-top: 10px;padding-right: 10px;padding-bottom: 10px; text-align: justify" > No hay más gratitud que hacer un producto que nos haga felíz </p> <div class="testimonial-info"> <img alt="" src="<?php echo base_url(); ?>public/img/profiles/2.jpg" class="img-circle " height="100"> <span class="testimonial-author"> Familia Felíz <em>  </em> </span> </div> </div> <div class="clearfix"></div> </div>

 </div> </div> <div class="testimonials-arrows pull-right" style="background-color: black"> <a class="left" href="#testimonials1" data-slide="prev"> <span class="fa fa-arrow-left"></span> </a> <a class="right" href="#testimonials1" data-slide="next"> <span class="fa fa-arrow-right"></span> </a> <div class="clearfix"></div> </div> </div> <div class="row"> <div class="col-md-12"> <div class="page-header" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-bottom: 0px;"> <h4 class="font-titulos" style="margin-left: 30px">Concurso <small class="font-enfasis">Participa Ya!</small></h4> </div> <div class="alert alert-info" style="margin-left: 20px"> <a href="<?php echo base_url(); ?>concurso/" class="btn btn-xs btn-primary pull-right">Participar</a> <strong>¿Ya estas Concursando?</strong> Registrate para ganar fabulosos premios </div> </div> </div>
<div style="margin-left: 20px; margin-top: 8px; display: flow-root; text-align: center" class="fb-like" data-href="https://www.facebook.com/bordintex" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
</div> <!-- /.col-lg-12 --></div> <!-- /.row --> <!-- Footer <footer> <div class="row"> <div class="col-lg-12"> <p>Copyright &copy; Your Website 2014</p> </div> </div> </footer><div class="eo2-sold-out js-sold-out-btn"><a href="<?php echo base_url(); ?>concurso/"><img src="<?php echo base_url(); ?>public/images/concurso.png"></a></div> -->


<div class="row" style="padding-left: 25px;">
<div id="ubicanos" class="divider"></div> <div class="page-header" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-bottom: 0px;"> <h2 class="font-titulos" style="margin-left: 30px">Brindando Emociones con nuestros bordados y más...</h2> </div>


<div class="col-md-4 col-sm-4 col-xs-12">
<div class="fb-video" data-width="400" data-href="https://www.facebook.com/Bordintex/videos/1725618231080804/" data-show-text="true"><blockquote cite="https://www.facebook.com/Bordintex/videos/1725618231080804/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bordintex/videos/1725618231080804/">Creatividad en tus Prendas</a></div>
</div>

 <div class="col-md-4 col-sm-4 col-xs-12">
<div class="fb-video" data-href="https://www.facebook.com/Bordintex/videos/1692764781032816/" data-width="400" data-show-text="true"><blockquote cite="https://www.facebook.com/Bordintex/videos/1692764781032816/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bordintex/videos/1692764781032816/"></a></div>
</div>

<div class="col-md-4 col-sm-4 col-xs-12">
<div class="fb-video" data-href="https://www.facebook.com/Bordintex/videos/1689258834716744/" data-width="400" data-show-text="true"><blockquote cite="https://www.facebook.com/Bordintex/videos/1689258834716744/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bordintex/videos/1689258834716744/"></a></div>
</div>


  </div>
