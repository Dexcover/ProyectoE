

 <div align="center">
 <ol class="breadcrumb">
Usted esta en :
  <li class="active"><a href="<?php echo base_url(); ?>servicios/" style="color: #ef7427"><u>Categorias</u></a></li>
  <li><a href="<?php echo base_url(); ?>servicios/subcategorias?id=all" style="color: black">Subcategorias</a></li>
  <li ><a href="#" style="color: black">Productos</a></li>
</ol>


<div class="page-header" style="margin-top: 28px;margin-bottom: -13px;">

  <h1 style="font-family: 'Lobster'" >Misión <p></p><small style="font-family: 'Russo+One'" > Empresa ecuatoriana dedicada y especializada en confeccionar y realizar impresiones en cualquier tipo de prenda de vestir o en objetos publicitarios. Enfocados en brindar en sus productos y servicios la más alta calidad, eficiencia y confiablidad, preocupados por el bienestar y economía de nuestra distinguida clientela.  </small></h1>
</div>
</div>
       <div class="row">



        <br/>





         
<div id="da-thumbs" class="da-thumbs">
  
<?php foreach ($categorias as $cat): ?>
  

                    <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter <?php echo $cat['N_CAT'] ?>">

                            <li >
                              <a href="subcategorias?id=<?php echo $cat['N_CAT']; ?>">
                               
                                  <img src="<?php echo $cat['CATIMG']; ?>" alt="<?php echo $cat['N_CAT'] ?>" class="img-responsive">

                                <div><span><?php echo $cat['N_CAT']; ?></span>
                                <span><?php echo $cat['CATDESC']; ?></span>
                                </div>


                              </a>
                            </li>

                     </div>


<?php endforeach ?>

       

</div>

        </div>





