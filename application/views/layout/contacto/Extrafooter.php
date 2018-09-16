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
<!-- jQuery -->
<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

<script>
    window.onload = function(){
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        $('#files').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            var j=0;
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    if(this.files[0].size < 2097152){
                  // continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load",function(event){
                        j++;
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.className="col-md-4";
                        div.id="cotizar";
                        
                        div.innerHTML = "<div class='col-md-6'><img class='thumbnail-fotos img-responsive' src='" + picFile.result + "'" +
                                "title='preview image'/></div><div class='col-md-6'><div class='form-group'><label class='control-label' for='tamanio"+j+"'>Tamaño estimado (cm)</label> <input type='text' class='form-control' id='tamanio"+j+"' name='tamanio"+j+"' placeholder='15x20' required/></div>  <div class='form-group'><label class='control-label' for='cantidad"+j+"'>Cantidad estimada</label> <input type='text' class='form-control' id='cantidad"+j+"' name='cantidad"+j+"' placeholder='cantidad' required/></div></div>";

                        output.insertBefore(div,null);
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.readAsDataURL(file);
                    }else{
                        alert("Imagen muy grande, mínimo 2 Mb.");
                        $(this).val("");
                    }
                }else{
                alert("Solo tipo imagen");
                $(this).val("");
            }
            }

        });
    }
    else
    {
        console.log("Considere cambiar de navegar para cotizar sus diseños, gracias.");
    }
}

   $('#files').on("click", function() {
        $('#result').children().remove();
        $('result').hide();
        $(this).val("");
    });

    $('#clear').on("click", function() {
        $('#result').children().remove();
        $('#result').hide();
        $('#files').val("");
        $(this).hide();
    });

</script>




</body>

</html>
