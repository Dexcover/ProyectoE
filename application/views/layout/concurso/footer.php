  <div class="row " style="text-align: center;"><div class="col-md-12 "> <a href="<?php echo base_url(); ?>"><img alt="logo principal" height="80px" style="margin-top: 20px" src="<?php echo base_url(); ?>public/images/logo principal.png"></a></div></div>
<div class="divider"></div>
  <div class="page-header" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-bottom: 0px;">
                    <h1  class="font-titulos" style="margin-left: 30px">Encuentranos <small  class="font-enfasis"></small></h1>
                </div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <h3 style="line-height:20%;"><i class="fa fa-home fa-1x" style="line-height:6%;color:#339966"></i> Dirección:</h3>               
                <p style="margin-top:6%;">San Luis de Chillogallo OE-314- S32 Diagonal Reten de la Policia</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x" style="line-height:6%;color:#339966"></i> E-mail contacto:</h3>
                <p style="margin-top:6%;line-height:35%">info@bordintex.com</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-user fa-1x" style="line-height:6%;color:#339966"></i> Gerente General:</h3>
                <p style="margin-top:6%;line-height:35%">Andres Viteri</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-yelp fa-1x" style="line-height:6%;color:#339966"></i> Telefonos:</h3>
                <p style="margin-top:6%;line-height:35%">+5939 9835335</p>
            </div>
        </div>
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/d/embed?mid=1qMa8vRrl02kD13IZzC8tsdOiM1Q"  width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
<div class="divider"></div>




    <div class="footer">

      <div class="container">
             
             <a href='https://www.facebook.com/andres.nitrodance'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
           
            </span>
      </div>
          <div class="row">
                <div class="col-lg-12">
                    <p class="font-enfasis">Copyright &copy; BordinTex 2016 <em >Excelencia en Bordados</em></p>
                </div>
                <div class="col-lg-12">
                    <p style="font-size: 16px; " class="font-enfasis">Desarrollado por <a style="color: darkblue" href="http://www.softupcloud.com">SoftupCloud</a></em></p>
                </div>
            </div>
    </div>




    </div>
    <!-- /.container -->

    <!-- jQuery -->
      <script src="<?php echo base_url();?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
      <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>


      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

     



      <script type="text/javascript" src="<?php echo base_url();?>public/js/modernizr.custom.46884.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.slicebox.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>public/js/sliderBordin.js"></script>






        <!-- To move Productos destacados-->

        <script src="<?php echo base_url();?>public/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>public/js/anime.min.js"></script>
        <script src="<?php echo base_url();?>public/js/main.js"></script>


        <!-- Movimiento de Letras -->
        <script type="text/javascript" src="<?php echo base_url();?>public/js/categoriasBordin.js"></script>


            <script type="text/javascript" src="<?php echo base_url();?>public/js/productos.js"></script>
   
<script type="text/javascript">
  
  function validarTelefono(){
    var mensaje="Asegurate de estar en un terminal con la App Whatsapp para aceptar esta función";
    if(confirm(mensaje)){
      var strUrl="whatsapp://send?text=hola, Somos Bordintext Excelencia en Bordados.! <?php echo base_url(); ?> ";
      window.open(strUrl, "Whatsapp");
    }
  }

    function pedirOferta(url){
     
      var mensaje="Para pedir por whatsapp necesitamos que registres el numero, Aceptar si ya lo tienes"
      if(!confirm(mensaje)){
      var strUrl="tel:+593983225335";
      window.open(strUrl, "Whatsapp");
    }else{

      var strUrl="whatsapp://send?text=Hola BordinTex, necesito esta oferta:  "+url+" ";
      window.open(strUrl, "Whatsapp");
    }

    }





$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

  
</script>

 <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.flexslider-min.js"></script>


    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
  
  $(function() {
    $('.show_menu').click(function(){
        $('.menu').fadeIn();
        $('.show_menu').fadeOut();
        $('.hide_menu').fadeIn();
    });
    $('.hide_menu').click(function(){
        $('.menu').fadeOut();
        $('.show_menu').fadeIn();
        $('.hide_menu').fadeOut();
    });
  });
  });
</script>


<script type="text/javascript" src="<?php echo base_url(); ?>public/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/engine1/script.js"></script>
</body>

</html>
