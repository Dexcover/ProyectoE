
<center>
<div class="row "><div class="col-md-12 "> <img class="img-responsive" alt="Promociones"  style="margin-top: 0px" src="<?php echo base_url(); ?>public/data1/images/descuentoslider.jpg"></div></div></center>

<?php foreach ($servicios as $s): ?>

<!--LOCALIZACION-->
<div id="ubicarusuario" class="row">
<div class="col-md-12 " style="text-align: center;">
      <ol class="breadcrumb">
      Usted esta en :
        <li class="active"><a href="<?php echo base_url(); ?>servicios/" style="color: black">Categorias</a></li>
        <li><a href="<?php echo base_url(); ?>servicios/subcategorias?id=<?php echo $s['N_CAT']; ?>" style="color: #ef7427"><u>Subcategorias: <small><?php echo $s['N_CAT']; ?></small></u></a></li>
        <li ><a href="#" style="color: black">Productos</a></li>
      </ol>

  </div>
</div>


<!--ENCABEZADO-->
<div class="row">
<div class="col-lg-3  visible-lg-block">
    <h2  style="margin-left: 20px; font-family: 'Yellowtail'">Nuestro Catálogo</h2>
</div>
 <div class="col-lg-9" align="center">
<div class="page-header" style="margin-top: -16px;margin-bottom: 0px;">

   <h1 style="color: #7a2c5b; font-family: 'Yellowtail'; font-size: 40px;margin-top: 5px;margin-bottom: 0px;"><?php echo $s['N_CAT']; ?><small > <?php echo $s['CATDESC']; ?> </small></h1>


</div>
</div>
</div>
    <?php endforeach?>

<!---FIN-->

   <div class="row">


   <!--LIST GROUP-->

      <div class="col-md-3 visible-md-block visible-lg-block ">
         <ul class="list-group">
          <?php foreach ($productos as $pro): ?>
            <li class="list-group-item"><a href="#ubicarusuario" onclick="mostrarProductos('<?=$pro['N_SUBCAT']?>')" style="color: #334f6f; font-family: 'Lobster'" ><?=$pro['N_SUBCAT']?></a> <span class="badge"><?=$pro['productos']?></span></li>
          <?php endforeach?>
        </ul>

      </div>
   <!--FIN-->

       <div class="col-md-9 col-xs-12">

              <div id="productos" class="row productos" style="display: none; margin-left: 20px;margin-right: 20px;" >


               </div>
              <div class='divider'></div>
          <?php $cont = 0;?>
                <?php foreach ($productos as $pro): $cont++;?>

                                                    <?php endforeach?>

              <?php if ($cont > 0) {?>
              <div id="da-thumbs" class="da-thumbs">

                <?php foreach ($subcategorias as $pro): ?>

                                      <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter  ?>">

                                          <li >
                                            <a style="cursor: pointer;" href="#ubicarusuario" onclick="mostrarProductos('<?=$pro['N_SUBCAT'];?>');">

                                                <img src="<?=base_url();?>public/subcategorias/<?php echo $pro['SUBCATIMG']; ?>" alt="<?php echo $pro['N_SUBCAT']; ?>" class="img-responsive">

                                              <div><span style="font-family: 'Yellowtail'"><?php echo $pro['N_SUBCAT']; ?></span>




                                              </div>


                                            </a>
                                          </li>
                                          <h5><?php echo $pro['N_SUBCAT']; ?></h5>
                                   </div>



                <?php endforeach?>


              </div>

              <?php }?>

        </div>



        <!--PRODUCTOS-->




  </div>
