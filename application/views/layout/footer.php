<div class="row">
<div id="ubicanos" class="divider"></div> <div class="page-header" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-bottom: 0px;"> <h2 class="font-titulos" style="margin-left: 30px">Empresa de <b>Bordados en Quito</b> - Dirección Google maps<small class="font-enfasis"></small></h2> </div>


<div class="col-sm-12"><center><span ><i class="fa fa-home" style="line-height:0%;color:#339966"></i> Dirección:</span> <p style="margin-top:0%;">Joaquín Ruales s30136 y Manuel Cherrez, 2 cuadras trás Iglesia de Chillogallo</p></center>
 <iframe src="https://www.google.com/maps/d/embed?mid=1qMa8vRrl02kD13IZzC8tsdOiM1Q" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


</div>


<div class="row">
<div class="divider"></div>
<div class="footer"> <div class="container"> <a href='https://www.facebook.com/bordintex'><i class="fa fa-facebook fa-3x fa-fw"></i></a> <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a> <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a> </span> </div> <div class="row"> <div class="col-lg-12"> <p class="font-enfasis">Copyright &copy; BordinTex 2017 <em >Excelencia en Bordados</em></p> </div>
<div class="col-lg-12">

    <a style="color: darkblue"  href="<?=base_url();?>Politica_de_privacidad">Politica de Privacidad </a>|
    <a style="color: darkblue"  href="<?=base_url();?>Quienes_somos"> Quíenes somos </a>|
    <a style="color: darkblue"  href="<?=base_url();?>Contacto"> Contacto </a> |
    <a style="color: darkblue"  href="<?=base_url();?>Concurso"> Concurso </a>

  </div>

<div class="col-lg-12"> <p style="font-size: 16px; " class="font-enfasis">Desarrollado por <a style="color: darkblue" href="https://www.softupcloud.com">SoftupCloud</a></em></p> </div> </div> </div>

</div>




<!-- jQuery -->
<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

<!--  PROMOCIONES JS -->
<script src="<?php echo base_url(); ?>public/ofertas/slick.min.js" type="text/javascript" charset="utf-8"></script>

<!-- SLIDER BAR -->
<script type="text/javascript" src="<?php echo base_url(); ?>public/engine1/home/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/engine1/home/script.js"></script>

<!-- COUNTER-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/counter.js"></script>

<script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 3000
            });
        });
</script>

<script type="text/javascript">

  $(".categoria")
  .mouseover(function() {
    $(this).css("background-color","#72173d");
  })
  .mouseout(function() {
    $(this).css("background-color","#666aff");
  });

</script>

<script type="text/javascript">

var flag=!0,flag2=!0;$(document).on("ready",function(){function e(){document.getElementById("navbordin").className+=" navbar-fixed-top",document.getElementById("mobileFirst").className+=" navbar-fixed-top",document.getElementById("mobileSecond").className+=" navbar-fixed-top",document.getElementById("bs-megadropdown-tabs").className+=" navbar-fixed-top",flag=!1}function a(){$("#navbordin").removeClass("navbar-fixed-top"),$("#mobileFirst").removeClass("navbar-fixed-top"),$("#bs-megadropdown-tabs").removeClass("navbar-fixed-top"),$("#mobileSecond").removeClass("navbar-fixed-top"),flag=!0}function n(){var n=window.pageYOffset;n>114&&1==flag&&e(),n<114&&a()}window.onscroll=function(e){n()},$(".variable").slick({dots:!0,infinite:!0,variableWidth:!0})});




function mostrarProductos(id){

  if(document.getElementById('productos').style.display==""){

    document.getElementById('productos').style.display="none";
    setTimeout(function() {$(".productos").fadeIn(1000);},0000);

  }else{
   setTimeout(function() {$(".productos").fadeIn(2000);},0000);
 }

 var parametros={'id': id};
 $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Servicios/obtenerProductobySub',
  type: 'post',
  beforeSend: function () {

   $('#productos').html("<center><div class='loader'></div></center>");

 },
 success: function(response){

  var types=JSON.parse(response);
  var html="";
  var cont=0;
  for (var i = 0; i < types.length; i++) {
    if(i==0){
      html+="<h2>"+types[i].N_SUBCAT+"</h2>";
      html+="<div class='well well-sm'>"+types[i].SUBCATDESC+"</div>";
      html+="<div class='list-group gallery'>";
    }

    html+="<div style='height: 390px;' class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>";
    html+="<a class='thumbnail fancybox' rel='ligthbox' href='<?=base_url();?>public/productos/"+types[i].PROIMG+"'>";
    html+="<img class='img-responsive' alt='Bordados "+types[i].N_PROD+"' src='<?=base_url();?>public/productos/"+types[i].PROIMG+"'' /></a>";
    html+="<div class='text-right' style='margin-top: -19px;'> <small class='text-muted'>"+types[i].N_PROD+"</small> </div>";
    
    if(types[i].ESTADO==0){
        var precio=parseFloat(types[i].PRECIO);
        var DTO=50;
        var vDto = precio * (parseFloat(DTO) / 100);
        var tprod= parseFloat(vDto+precio).toFixed(2);
        

        html+="<div class='text-right' style='margin-top: -4px;'> <small class='text-muted'><font style='color: orange'><b>Antes: </b>$<strike>"+tprod+"</strike></font></small> </div>";
        
        html+="<div class='text-right' style='margin-top: -8px;'><i class='fa fa-money'></i> <small class='font-titulos'>$"+types[i].PRECIO+"</small></div>";
        html+="<div class='row'><div class='text-right' style='margin-top: -1px; margin-bottom: 10px'><button id='producto"+types[i].ID_PROD+"' class='btn btn-success'  onclick='addProduct("+types[i].ID_PROD+")'>Añadir al carrito</button> </div></div>";
    }
    
    
    html+="</div>";





  }
  html+="</div>";




  $('#productos').html(html);

  $('html, body').animate({
    scrollTop: '902px'
  }, 300);

}


});

}

function addProduct(id){

var parametros={'id': id};
 $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Carrito/addProduct',
  type: 'post',
  beforeSend: function () {
    $('#producto'.concat(id)).html('Añadiendo...<i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(response){
    $('#items').html(response);
    $('#producto'.concat(id)).html('Añadido <i class="fa fa-check"></i>');
  },
  error: function(){
    $('#producto'.concat(id)).html('No añadido, reintentar.').removeClass('btn-success').addClass('btn-danger');
    $('#producto'.concat(id)).prop('disabled', false);
  }
});

}




$(document).ready(function(){

$(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
  });

$('.ir-arriba').click(function(){
  $('body, html').animate({
    scrollTop: '500px'
  }, 300);
});

$(window).scroll(function(){
  if( $(this).scrollTop() > 900 ){
    $('.ir-arriba').slideDown(300);
  } else {
    $('.ir-arriba').slideUp(300);
  }
});

});

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


</body>

</html>
