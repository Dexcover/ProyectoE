<?php $this->view("FinalPage"); ?>


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
