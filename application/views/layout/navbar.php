<div class="visible-sm-block visible-md-block visible-lg-block" style="margin-bottom: 20px;">
<div id="navbordin" class="navbar navbar-inverse center " style="margin-bottom: -19px;">
 <div class="navbar-inner">
  <div class="container center">
   <ul class="nav navbar-nav nav-center ">
    <li class="dropdown mega-dropdown">
     <a href="#" class="dropdown-toggle font-menus" data-toggle="dropdown">
     <i class="fa fa-globe"></i>
     ¿Quienes Somos?</a>
     <ul class="dropdown-menu mega-dropdown-menu row">
     <li class="col-sm-4 qof" >
     <ul>
     <li class="dropdown-header" style="color: pink; font-size: 14px"><b>Misión de Bordintex</b></li>
     <span style="color: white" >Empresa ecuatoriana bordadora dedicada y especializada en confeccionar y realizar impresiones en cualquier tipo de prenda de vestir o en objetos publicitarios. Enfocados en brindar en sus productos y servicios la más alta calidad, eficiencia y confiablidad, preocupados por el bienestar y economía de nuestra distinguida clientela.</span>
      <div class="col-lg-12">

    <a style="color: pink;"  href="<?=base_url();?>Politica_de_privacidad">Politica de Privacidad </a><span style="color: white">|</span>
    <a style="color: pink"  href="<?=base_url();?>Quienes_somos"> Quíenes somos </a><span style="color: white">|</span>
    <a style="color: pink"  href="<?=base_url();?>Contacto"> Contacto </a> <span style="color: white">|</span>
    <a style="color: pink"  href="<?=base_url();?>Concurso"> Concurso </a>

  </div>

         <li class="divider"></li>

            </ul>
            </li>
            <li class="col-sm-4 qof" >
            <ul>
            <li class="dropdown-header" style="color: pink; font-size: 14px"><b>Bordados Personalizados</b></li>
             <li style="color: white">Tazas</li>
             <li style="color: white">Almohadas</li>
             <li style="color: white">Todo tipo de vestimenta</li>
             <li style="color: white">Llaveros</li>
             <li style="color: white">Agendas</li>
             <li style="color: white">Articulos publicitarios</li>
             <a target="_blank" style="font-size: 16px" href="https://www.facebook.com/Bordintex/"><i class="fa fa-facebook-square" aria-hidden="true"></i><u> Ver nuestra página de Facebook</u></a>
              <li class="divider"></li>

                  </ul>
                  </li>
                   <li class="col-sm-4 qof" > <ul>
                   <li class="dropdown-header" style="color: pink; font-size: 14px"><b>Servicios de Bordados en</b></li>
                                     <li style="color: white"><u>Bordados en Gorras</u></li>
                                       <li style="color: white"><u>Bordados en Camisetas</u></li>
                                       <li style="color: white"><u>Bordados en Nombres</u></li>
                                       <li style="color: white"><u>Bordados en Chalecos</u></li>
                                       <li style="color: white"><u>Bordados en Chompas</u></li>
                                       <li style="color: white"><u>Bordados Personalizados</u></li>
                                        <a href="<?=base_url();?>servicios/subcategorias?id=Bordados" class="btn btn-success btn-block" style="margin-top: 10px">Ver Catálogo</a>

                     <li class="divider"></li> </ul> </li>
                    </ul>
                    </li>



  <!--
                    <li class="dropdown mega-dropdown"> <a href="tel:+593983225335" class="font-menus" > <i class="fa fa-phone" aria-hidden="true"></i> (5939)994248191</a> </li>

                     <li class="dropdown mega-dropdown"> <a href="<?php echo base_url(); ?>concurso/" class="font-menus" > <i class="fa fa-plus" aria-hidden="true"></i> Concurso</a> </li>
                    -->

                    <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" href="<?php echo base_url(); ?>servicios/subcategorias?id=Bordados" target="_self" class="font-menus" > <i class="fa fa-eye" aria-hidden="true"></i> Bordados</a> </li>

                     <li id="servicios" class="dropdown mega-dropdown">
                     <a href="#" class="dropdown-toggle font-menus" data-toggle="dropdown" > <i class="fa fa-map-marker"></i> Contactanos <span class="caret"></span></a>
                      <div id="filters" class="dropdown-menu mega-dropdown-menu">
                       <div class="container-fluid2">
                       <div class="tab-content"> <div class="tab-pane active" id="kids">
                       <ul class="nav-list list-inline">
                       <li><a data-filter=".89" href="<?php echo base_url(); ?>contacto"><img width="150" height="100" src="<?php echo base_url(); ?>public/images/contactoimg.jpeg"><span><b>Cotizador Especifico </b></span></a></li>

                       <li><a data-filter=".97" href="<?php echo base_url(); ?>cotizar"><img width="150" height="100" src="<?php echo base_url(); ?>public/images/seocgeneral.png"><span>Cotizador General</span></a></li>

                         </ul> </div> </div> </div> </div> </li>



                     <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" href="<?php echo base_url(); ?>auth" class="font-menus" > <i class="fa fa-user-circle-o" target="_blank" aria-hidden="true"></i><?php if (empty($this->session->userdata("nick"))) {echo " Iniciar Sesión";} else {echo " " . $this->session->userdata("nick");}?>   </a></li>

                     <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" href="<?php echo base_url(); ?>carrito" class="font-menus" > <i class="fa fa-shopping-cart" target="_blank" aria-hidden="true"></i> <span id="items"><?php echo $this->session->userdata("items") ?></span> items</a></li>





                      </ul>

                      </div></div></div></div>


<!-- MENU CELULAR -->

  <div class="row visible-xs-block" ><nav id="mobileFirst" class="navbar navbar-default ">
   <div class="container"> <div class="navbar-header" style="background-color: #8c7177; ">
   <div style="display: inline-flex; margin-top: 5px; margin-left: 26px">
    <h5 class="font-menus" style="font-size: 20px; color: white">Menú &nbsp; &nbsp;
    <a href="tel:+593998111422" class="font-menus" style="font-size: 12px;" >
     <i class="fa fa-phone" aria-hidden="true"></i>
      0998111422</a> -
      <a style="cursor: pointer; font-size: 12px;" href="<?=base_url();?>servicios/subcategorias?id=Bordados" target="_blank" class="font-menus" >
       <i class="fa fa-comments" aria-hidden="true"></i> Bordados</a>
       </h5>
     </div>
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse" style=" background-color: #b49199; ">
       <ul class="nav navbar-nav"> <li class="dropdown mega-dropdown">
       <a href="#" class="dropdown-toggle font-menus" data-toggle="dropdown"><i class="fa fa-globe"></i>¿Qué Ofremos? </a>

        <ul class="dropdown-menu mega-dropdown-menu row">
        <li class="col-sm-4 qof" >
            <ul>
            <li class="dropdown-header" style="color: pink; font-size: 14px"><b>Personalización</b></li>
             <li style="color: white">Tazas</li>
             <li style="color: white">Almohadas</li>
             <li style="color: white">Todo tipo de vestimenta</li>
             <li style="color: white">Llaveros</li>
             <li style="color: white">Agendas</li>
             <li style="color: white">Articulos publicitarios</li>
             <a target="_blank" style="font-size: 16px" href="https://www.facebook.com/Bordintex/"><i class="fa fa-facebook-square" aria-hidden="true"></i><u> Ver nuestra página de Facebook</u></a>
              <li class="divider"></li>

                  </ul>
                  </li>
                   <li class="col-sm-4 qof" > <ul>
                   <li class="dropdown-header" style="color: pink; font-size: 14px"><b>Servicios en</b></li>
                                     <li style="color: white">Bordados en Gorras</li>
                                       <li style="color: white">Bordados en Camisetas</li>
                                       <li style="color: white">Bordados en Nombres</li>
                                       <li style="color: white">Bordados en Chalecos</li>
                                       <li style="color: white">Bordados en Chompas</li>
                                       <li style="color: white">Bordados Personalizados</li>
                                        <a href="<?=base_url();?>servicios/subcategorias?id=Bordados" class="btn btn-success btn-block" style="margin-top: 10px">Ver Catálogo</a>

                     <li class="divider"></li> </ul> </li>



                         </ul>


                    <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle font-menus" data-toggle="dropdown" >
                    <i class="fa fa-thumb-tack"></i> Servicios
                    <span class="caret"></span></a>
                    <div id="filters" class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid2"> <!-- Tab panes --> <div class="tab-content">
                     <div class="tab-pane active" id="kids">
                      <ul class="nav-list list-inline">

                      <li><a data-filter=".89" href="<?php echo base_url(); ?>servicios/subcategorias?id=Bordados"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/bordados.png"><span>BORDADOS</span></a></li>

                      <!--
                      <li><a data-filter=".97" href="<?php echo base_url(); ?>servicios/subcategorias?id=serigrafia"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/serigrafia.png"><span>SERIGRAFIA</span></a></li>

                      <li><a data-filter=".96" href="<?php echo base_url(); ?>servicios/subcategorias?id=sublimado"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/sublimado.png"><span>SUBLIMADO</span></a></li>

                       <li><a data-filter=".87" href="<?php echo base_url(); ?>servicios/subcategorias?id=tampografia"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/tampografia.png"><span>TAMPOGRAFÍA</span></a></li>

                        <li><a data-filter=".85" href="<?php echo base_url(); ?>servicios/subcategorias?id=encapsulados"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/encapsulado.png"><span>ENCAPSULADOS</span></a></li>

                         <li><a data-filter=".90" href="<?php echo base_url(); ?>servicios/subcategorias?id=Impresiones laser"><img width="150" height="100" src="<?php echo base_url(); ?>public/servicios/laser.png"><span>IMPRESIONES LÁSER</span></a></li>
  -->
                          </ul> </div> </div> </div> </div> </li>


                          <li id="servicios" class="dropdown mega-dropdown">
                     <a href="#" class="dropdown-toggle font-menus" data-toggle="dropdown" > <i class="fa fa-map-marker"></i> Contactanos <span class="caret"></span></a>
                      <div id="filters" class="dropdown-menu mega-dropdown-menu">
                       <div class="container-fluid2">
                       <div class="tab-content"> <div class="tab-pane active" id="kids">
                       <ul class="nav-list list-inline">
                       <li><a data-filter=".89" href="<?php echo base_url(); ?>contacto"><img width="150" height="100" src="<?php echo base_url(); ?>public/images/contactoimg.jpeg"><span><b>Cotizador Especifico </b></span></a></li>

                       <li><a data-filter=".97" href="<?php echo base_url(); ?>cotizar"><img width="150" height="100" src="<?php echo base_url(); ?>public/images/seocgeneral.png"><span>Cotizador General</span></a></li>

                         </ul> </div> </div> </div> </div> </li>



                    <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" href="<?php echo base_url(); ?>auth" class="font-menus" > <i class="fa fa-user-circle-o" target="_blank" aria-hidden="true"></i><?php if (empty($this->session->userdata("nick"))) {echo " Iniciar Sesión";} else {echo " " . $this->session->userdata("nick");}?>   </a></li>

                     <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" href="<?php echo base_url(); ?>carrito" class="font-menus" > <i class="fa fa-shopping-cart" target="_blank" aria-hidden="true"></i> <span id="items"><?php echo $this->session->userdata("items") ?></span> items</a></li>
<!--
                    <li class="dropdown mega-dropdown"> <a href="<?php echo base_url(); ?>concurso/" class="font-menus" > <i class="fa fa-plus" aria-hidden="true"></i> Concurso</a> </li>

                    <li class="dropdown mega-dropdown"> <a style="cursor: pointer;" onclick="validarTelefono();" class="font-menus" > <i class="fa fa-whatsapp" aria-hidden="true"></i> wasapealo!</a> </li> -->

                     </ul> </div><!--/.nav-collapse --> </div> </nav></div>
