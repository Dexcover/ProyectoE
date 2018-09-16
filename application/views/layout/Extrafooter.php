<?php $this->view("FinalPage"); ?>

    <script>
        $(document).ready(function(){
       $("#Formulario").submit(function( event ){
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: '<?=base_url();?>index.php/Contacto/contactar',
      data: $(this).serialize(),
      success: function(data){
        $("#respuesta").slideDown();
        $("#respuesta").html(data);
                $('#modalRespuestaContacto').modal('show');
                document.getElementById('Formulario').reset();
      }
    });

    return false;
  });
});


        $(document).ready(function(){

  //FANCYBOX
  //https://github.com/fancyapps/fancyBox
  $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
  });
});



function eliminarProducto(id){
var parametros={'id': id};
 $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Carrito/deleteProduct',
  type: 'post',
  beforeSend: function () {},
  success: function(response){
    $('#items').html(response);
    location.reload();
  }
});
}


function actualizarProducto(id,op){
  var cantidad= document.getElementById('cantidad'.concat(id)).value;



  if(op =="+"){
    cantidad=parseInt(cantidad)+parseInt(1);
  }else{
    cantidad=parseInt(cantidad)-parseInt(1);
  }

  if(cantidad>0 ){
  var parametros={'id': id, 'cantidad':cantidad};
 $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Carrito/updateProduct',
  type: 'post',
  beforeSend: function () {
    $('#totalProducto'.concat(id)).html('<i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(){
    location.reload();
  }
});
}

}

    </script>


    <script type="text/javascript">

$('#btncupon').on('click', function(){


 var parametros={
    'descuento': $("#cupon").val()
  };

 $.ajax({
  data: parametros,
  url: '<?=base_url();?>index.php/Compra/descuento',
  type: 'post',
  beforeSend: function () {
    $('#btncupon').html('Validando... <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(response){

    var types=JSON.parse(response);
    var html="";
      if(types.ACTIVO==1){
          $('#msgdescuento').html("");
          var total=types.TOTAL;
          var descuento=types.DESCUENTO;
          var porcentaje=((total*descuento)/100).toFixed(2);
          var nuevoTotal=(total-porcentaje).toFixed(2);
          html+="<td></td><td></td><td></td><td><h5>Descuento</h5></td><td class='text-right'><strong>-"+descuento+"%</strong></td>";
          $('#detalledescuento').html(html);

          $('#titulototal').html("<h5>Total sin Descuento</h5>");
          $('#titulototaln').html("<h5><strong id='Total'>$"+total+"</strong></h5>");
          html="<td></td><td></td><td></td><td><h3>Total a Pagar</h3></td><td class='text-right'><h3><strong>$"+nuevoTotal+"</strong></h3></td>";
          $('#detalledescuentototal').html(html);

          $('#btncupon').html('Cupón válido <i class="fa fa-check"></i>').prop('disabled', true);
          $('#cupon').prop('disabled', true);
      }else if(types.ACTIVO==0){
        $('#msgdescuento').html("Este cupón ya no es valido, contacte con administrador.");
        $('#btncupon').html("Aplicar").prop('disabled', false);
        $('#cupon').prop('disabled', false);

      } else if(types.ACTIVO==99){
        $('#msgdescuento').html("No ha ingresado un cupón válido.");
        $('#btncupon').html("Aplicar").prop('disabled', false);
        $('#cupon').prop('disabled', false);
      }




  },

  error: function(){
    $('#btncupon').html('No se pudo procesar, intente de nuevo.').removeClass('btn-success').addClass('btn-danger');
    $('#btncupon').prop('disabled', false);
  }
});

});

$('#mperfil').on('click', function(){
window.location.href = "<?=base_url();?>auth";
});

$('#mpedidos').on('click', function(){
window.location.href = "<?=base_url();?>pedido";
});

$('#mcarrito').on('click', function(){
window.location.href = "<?=base_url();?>carrito";
});

$('#mvperfil').on('click', function(){
window.location.href = "<?=base_url();?>visitante";
});

$('#mvcarrito').on('click', function(){
window.location.href = "<?=base_url();?>carrito";
});


$('.btnCaja').on('click', function(){

$('.tipopago').prop('hidden', false);

});


function totalfacturar(){
   var parametros={
    'descuento': $("#cupon").val()
  };

 $.ajax({
  data: parametros,
  url: '<?=base_url();?>index.php/Compra/descuento',
  type: 'post',
  beforeSend: function () {

  },
  success: function(response){

    var types=JSON.parse(response);
    var html="";
      if(types.ACTIVO==1){
          $('#msgdescuento').html("");
          var total=types.TOTAL;
          var descuento=types.DESCUENTO;
          var porcentaje=((total*descuento)/100).toFixed(2);
          var nuevoTotal=(total-porcentaje).toFixed(2);
          nuevoTotal=(parseFloat(nuevoTotal)+parseFloat(5.00)).toFixed(2);

          $('#totalfacturar').html("$"+nuevoTotal);
          $('#totalfacturar2').html("$"+nuevoTotal);

      }else if(types.ACTIVO==0){
         var nuevoTotal=(parseFloat(types.TOTAL)+parseFloat(5.00)).toFixed(2);
        $('#totalfacturar').html("$"+nuevoTotal);
        $('#totalfacturar2').html("$"+nuevoTotal);

      } else if(types.ACTIVO==99){
        var nuevoTotal=(parseFloat(types.TOTAL)+parseFloat(5.00)).toFixed(2);
        $('#totalfacturar').html("$"+nuevoTotal);
        $('#totalfacturar2').html("$"+nuevoTotal);
      }

  }

});
}

$('#credito').on('click', function(){
    $('.tarjetas').prop('hidden', false);
    $('.detalledeposito').prop('hidden', true);
    $('.pagodestino').prop('hidden', true);
    totalfacturar();

});

$('#deposito').on('click', function(){
    $('.detalledeposito').prop('hidden', false);
    $('.tarjetas').prop('hidden', true);
    $('.pagodestino').prop('hidden', true);
    totalfacturar();
});

$('#destino').on('click', function(){
    $('.pagodestino').prop('hidden', false);
    $('.tarjetas').prop('hidden', true);
    $('.detalledeposito').prop('hidden', true);
    totalfacturar();
});





var $form = $('#payment-form');
$form.find('.subscribe').on('click', guardarTran);

var $formDeposito = $('#payment-form-deposito');
$formDeposito.find('.subscribe').on('click', guardarTranDeposito);

var $formDestino = $('#payment-form-destino');
$formDestino.find('.subscribe').on('click', guardarDestino);


function guardarTran(){

  var parametros={
    'ntarjeta': $form.find('[name=cardNumber]').val(),
    'expfecha': $form.find('[name=cardExpiry]').val(),
    'codigocv': $form.find('[name=cardCVC]').val(),
    'cupon':$('#cupon').val(),
    'direccion':$form.find('[name=direccion]').val()
  };


 $.ajax({
  data: parametros,
  url: '<?=base_url();?>index.php/Compra/registrarTarjeta',
  type: 'post',
  beforeSend: function () {
    $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(response){

    if(response=="true"){
      window.location.href = "<?=base_url();?>index.php/Pedido/index";
    }else{
      window.location.href = "<?=base_url();?>index.php/Auth/compraInicio";
    }

  },

  error: function(){
    $form.find('.subscribe').html('No se pudo procesar, intente de nuevo.').removeClass('btn-success').addClass('btn-danger');
    $form.find('.subscribe').prop('disabled', false);
  }
});
}


function guardarTranDeposito(){

  var parametros={
    'cupon':$('#cupon').val(),
    'direccion':$formDeposito.find('[name=direccion]').val()
  };
    
 
    
 $.ajax({
  data: parametros,
  url: '<?=base_url();?>index.php/Compra/registrarDeposito',
  type: 'post',
  beforeSend: function () {
    $formDeposito.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(response){
    if(response=="true"){
      window.location.href = "<?=base_url();?>pedido/index";
    }else{
      window.location.href = "<?=base_url();?>auth/compraInicio";
    }

  },

  error: function(){
    $formDeposito.find('.subscribe').html('No se pudo procesar, intente de nuevo.').removeClass('btn-success').addClass('btn-danger');
    $formDeposito.find('.subscribe').prop('disabled', false);
  }
});
}

function guardarDestino(){

var parametros={
  'cupon':$('#cupon').val(),
  'direccion':$formDestino.find('[name=direccion]').val()
};
  

  
$.ajax({
data: parametros,
url: '<?=base_url();?>index.php/Compra/registrarDestino',
type: 'post',
beforeSend: function () {
  $formDeposito.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
},
success: function(response){
  
  if(response=="true"){
    window.location.href = "<?=base_url();?>index.php/Pedido/index";
  }else{
    window.location.href = "<?=base_url();?>index.php/Auth/compraInicio";
  }

},

error: function(){
  $formDeposito.find('.subscribe').html('No se pudo procesar, intente de nuevo.').removeClass('btn-success').addClass('btn-danger');
  $formDeposito.find('.subscribe').prop('disabled', false);
}
});
}





function detallePedido(id){
var parametros={'id': id};
 $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Pedido/detallePedido',
  type: 'post',
  beforeSend: function () {
    $('#botton'.concat(id)).html('Consultando...<i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(response){
    $('#divDetalles').prop('hidden', false);
    var types=JSON.parse(response);
    var html="";
    for (var i = 0; i < types.length; i++) {
      html+= "<tr><td>"+types[i].N_PROD+"</td><td>"+types[i].CANTIDAD_PEDIDA+"</td></tr>";
    }

    $('#detalle_pedido').html(html);
    $('#botton'.concat(id)).html('Detalles').prop('disabled', false);
  },
  error: function(){
    $('#botton'.concat(id)).html('No añadido, reintentar.').removeClass('btn-primary').addClass('btn-danger');
    $('#botton'.concat(id)).prop('disabled', false);
  }
});

}


function yaDeposite(id){
  var comprobante=prompt('Ingrese su mensaje:','');

  if(comprobante.length>0){
  var parametros={'id': id,
  'comprobante': comprobante};
   $.ajax({

  data: parametros,
  url: '<?=base_url();?>index.php/Transaccion/yaDeposite',
  type: 'post',
  beforeSend: function () {
    $('#btndeposite'.concat(id)).html('Consultando...<i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
  },
  success: function(){
    window.location.href = "<?=base_url();?>pedido/index";
  },
  error: function(){
    $('#btndeposite'.concat(id)).html('No procesado, reintentar.').removeClass('btn-primary').addClass('btn-danger');
    $('#btndeposite'.concat(id)).prop('disabled', false);
  }
});
 }

}



function hola(){



$form.find('[name=cardCVC]').val()


  $form.find('.payment-errors').text("errores o algo ");
            $form.find('.payment-errors').closest('.row').show();

$form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>').removeClass('btn-success').addClass('btn-danger');


 $form.find('.subscribe').prop('disabled', false);
}



    </script>


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

<script>
    validarTamaño1  = function() {

        num = document.getElementById('cardExpiry').value;

        if(num.length>4 && num.length>0){
            alert('solo se permite 4 numeros.');
            document.forms[0].cardExpiry.value="";
            return false;
        }else{
            return true;
        }
        return true;
    }
</script>

<script type="text/javascript">
  $(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        },
         function () {
           $('.image-preview').popover('hide');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial; color: red',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Vista Previa</strong>"+$(closebtn)[0].outerHTML,
        content: "No hay Imagen",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Buscar Imagen");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Cambiar Imagen");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
    });
});
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>
