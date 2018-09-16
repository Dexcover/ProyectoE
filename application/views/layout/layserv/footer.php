<?php $this->view("FinalPage"); ?>


<script type="text/javascript" src="<?php echo base_url(); ?>public/js/productos.js"></script>


  <script src="<?php echo base_url(); ?>public/js/jQuery-svg-popup.js"></script>
  <script>
  $(function(){
    // Rectangle demo start------------------------
    $('.demo1').svgpopup({
      stepX: 12,
      stepY: 9,
      figure: 'rectangle',
      fill: '#fcbf02',
      opacity: 0.6,
      speed: 1.2
    });
    $('.demo2').svgpopup({
      stepX: 8,
      stepY: 7,
      figure: 'rectangle',
      fillOdd: '#fff',
      fillEven: '#111',
      opacity: 0.9,
      speed: 1.2
    });
    $('.demo3').svgpopup({
      figure: 'rectangle',
      fill: '#fcbf02',
      randomize: false
    });
    // Rectangle demo end --------------------------

    // Triangle demo start--------------------------
    $('.demo4').svgpopup({
      stepX: 10,
      stepY: 8,
      figure: 'triangle',
      fill: '#111',
      speed: 1.2,
      opacity: 0.8,
    });
    $('.demo5').svgpopup({
      stepX: 6,
      stepY: 4,
      figure: 'triangle',
      fill: '#fcbf02',
      strokeFill: 'rgba(255,255,255, .2)',
      opacity: 0.8,
      visible: false,
      speed: 1,
      randomize: false
    });
    $('.demo6').svgpopup({
      stepX: 8,
      stepY: 6,
      figure: 'triangle',
      fillOdd: '#fcbf02',
      fillEven: '#111',
      opacity: 0.9,
      visible: false,
      speed: 1
    });
    // Triangle demo end ---------------------------
  }());
  </script>


            <!--On imges-->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.hoverdir.js"></script>
    <script type="text/javascript">
      $(function() {

        $(' #da-thumbs > div > li ').each( function() { $(this).hoverdir(); } );

      });
    </script>

 <!--Código para imagenes -->
    <script type="text/javascript">

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
            url: '<?=base_url();?>index.php/servicios/obtenerProductobySub',
            type: 'post',
            beforeSend: function () {
               $('#productos').html("<center><div class='loader'></div></center>");

            },
            success: function(response){

               var types=JSON.parse(response);
              var html="";
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
        

         html+="<div class='text-right' style='margin-top: -4px;'> <small class='text-muted' style='font-size: 15px'><font style='color: orange'><b>Antes: </b>$<strike>"+tprod+"</strike></font></small> </div>";
        
        html+="<div class='text-right' style='margin-top: -8px;'><i class='fa fa-money'></i> <small class='font-titulos'>$"+types[i].PRECIO+"</small></div>";
        html+="<div class='row'><div class='text-right' style='margin-top: -1px; margin-bottom: 10px'><button id='producto"+types[i].ID_PROD+"' class='btn btn-success'  onclick='addProduct("+types[i].ID_PROD+")'>Añadir al carrito</button> </div></div>";
                }
                
                
                html+="</div>";

                
                
              }
              html+="</div>";




              $('#productos').html(html);


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
          scrollTop: '0px'
        }, 300);
      });

      $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
          $('.ir-arriba').slideDown(300);
        } else {
          $('.ir-arriba').slideUp(300);
        }
      });

    });

    </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
