  <div class="row " style="text-align: center;"><div class="col-md-12 "> <a href="<?php echo base_url(); ?>"><img alt="logo principal" height="80px" style="margin-top: 20px" src="<?php echo base_url(); ?>public/images/logo principal.png"></a></div></div>
<div class="row">


<div class="row">
<div class="divider"></div>
<div class="footer"> <div class="container"> <a href='https://www.facebook.com/bordintex'><i class="fa fa-facebook fa-3x fa-fw"></i></a> <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a> <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a> </span> </div> <div class="row"> <div class="col-lg-12"> <p class="font-enfasis">Copyright &copy; BordinTex 2017 <em >Excelencia en Bordados</em></p> </div>

<div class="row">

  <div class="col-lg-12">

    <a style="color: darkblue"  href="<?=base_url();?>Politica_de_privacidad">Politica de Privacidad </a>|
    <a style="color: darkblue"  href="<?=base_url();?>Quienes_somos"> Quíenes somos </a>|
    <a style="color: darkblue"  href="<?=base_url();?>Contacto"> Contacto </a> |
    <a style="color: darkblue"  href="<?=base_url();?>Concurso"> Concurso </a>

  </div>

  <div class="col-lg-12" style="margin-top: 10px"> <p style="font-size: 16px; " class="font-enfasis">Desarrollado por <a style="color: darkblue" href="http://www.softupcloud.com">SoftupCloud</a></em></p> </div>

</div>

 </div> </div>

</div>


<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>






    <script>
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<script>
        $(document).ready(function (){
          $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });
 </script>




</body>

</html>
