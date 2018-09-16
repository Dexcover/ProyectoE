<center><div class="row "><div class="col-md-12 "> <img class="img-responsive" alt="Promociones"  style="margin-top: 0px" src="<?php echo base_url(); ?>public/images/descuentoCarro_cliente.jpg"></div><p>Código promocional para clientes registrados. <b>¡Úsalo!</b></p></div></center>

<?php if (!empty($this->session->userdata('carrito'))): ?>
<div style="overflow-x:auto;">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>



<?php

$datos    = $this->session->userdata('carrito');
$subtotal = 0;?>

                        <?php foreach ($datos as $carro) {?>
                    <tr>
                        <td class="col-md-12">
                        <div class="media">
                            <a class='thumbnail pull-left fancybox' rel='ligthbox' href="<?=base_url();?>public/productos/<?=$carro['img'];?>"> <img class="media-object img-responsive" src="<?=base_url();?>public/productos/<?=$carro['img'];?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?=$carro['producto'];?></h4>
                                <h5 class="media-heading"> <b>Por</b> Bordintex</h5>
                                <span>Estado: </span><span class="text-success"><strong>En stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <button onclick="actualizarProducto(<?=$carro['id_producto'];?>,'+')" class="form-control btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <input type="text" class="form-control solo-numero" id="cantidad<?=$carro['id_producto'];?>" value="<?=$carro['cantidad'];?>" disabled>
                            <button onclick="actualizarProducto(<?=$carro['id_producto'];?>,'-')" class="form-control btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?=$carro['precio'];?></strong></td>
                        <?php $precioTotal = bcmul($carro['precio'], $carro['cantidad'], 2);?>
                        <?php $subtotal += $precioTotal;?>
                        <td class="col-sm-1 col-md-1 text-center"><strong id="totalProducto<?=$carro['id_producto'];?>">$<?=$precioTotal;?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" onclick="eliminarProducto(<?=$carro['id_producto'];?>)">
                            <span class="glyphicon glyphicon-remove"></span> Quitar
                        </button></td>
                    </tr>

                        <?php }?>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <?php $totalsiniva = bcsub($subtotal, bcmul($subtotal, 0.12, 2), 2);?>
                        <td class="text-right"><h5><strong id="subtotal">$<?=$totalsiniva?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Iva +12%</h5></td>
                        <td class="text-right"><h5><strong id="precioEnvio"><?=bcmul($subtotal, 0.12, 2);?></strong></h5></td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td id="titulototal"><h3>Total</h3></td>
                        <td id="titulototaln" class="text-right"><h3><strong id="Total">$<?=bcadd($subtotal, 0.00, 2);?></strong></h3></td>
                    </tr>
                    <tr id="detalledescuento"></tr>
                    <tr id="detalledescuentototal"></tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>

                        <td>
                          <label for="couponCode">Cupón Descuento</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="cupon" name="cupon" />
                            <button style="margin-top: 5px; width: 100%" id="btncupon" class="btn btn-info">Aplicar</button>
                            <span id="msgdescuento"></span>
                        </td>

                    </tr>


                </tbody>
            </table>

 <div style="text-align: center;">
     <h4>Todas las personalizaciones de su pedido son atendidas de manera personalizada para garantizar la máxima calidad.</h4>
     
                        <a  class="btn btn-success" href="<?=base_url();?>">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar en la Tienda
                        </a>
                        <button type="button" class="btnCaja btn btn-primary">
                            Procesar para ordenar <span class="glyphicon glyphicon-play"></span>
                        </button>

</div>



<div class="tipopago" style="text-align: center;" hidden="true" style="text-align: center;">
<h3>¿Cómo desea recibir su pedido?</h3>


  <label style="margin-right: 30px;"><input id="deposito" type="radio" name="optradio"> A Domicilio</label>

  <label style="margin-right: 30px;"><input id="destino" type="radio" name="optradio"> Ir a nuestro Local</label>

</div>


<div class="detalledeposito row" hidden="true" >

            <!-- DOMICILIO -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >DETALLE PARA: ENTREGA A DOMICILIO</h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="<?php echo base_url(); ?>public/images/AMISTADlogo principal.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form-deposito" method="POST" action="javascript:pagar();">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <span>Para realizar la entrega a su domicilio tiene un valor de <strong>+ $5.00</strong>.  Valor Total de su pedido es: <font class="text-right" style="font-size: 26px"><strong id="totalfacturar2"></strong></font></span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">IMPORTANTE:</label>
                                    <div class="input-group">
                                        <span>Después que usted procese la orden de pedido nos pondremos en contacto contigo para las personalizaciones en los productos.</span> </br>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">PROCESAR ORDEN DE PEDIDO</button>
                            </div>
                           
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->
</div>


<div class="pagodestino row" hidden="true" >

            <!-- PAGO LOCAL -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >DETALLE PARA: ENTREGA EN NUESTRO LOCAL</h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="<?php echo base_url(); ?>public/images/AMISTADlogo principal.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form-destino" method="POST" action="javascript:pagar();">

                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">DESCRIPCIÓN</label>
                                    <span>Esta opción le permite recibir una atención completamente personalizada.</span></br>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">IMPORTANTE:</label>
                                    <div class="input-group">
                                        <span>Después que usted procese la orden de pedido nos pondremos en contacto con usted para las personalizaciones en los productos.</span> </br>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">HORARIOS Y DIRECCIÓN</label>
                                    <span>-Nuestro local se encuentra ubicado: <b>Joaquín Ruales s30136 y Manuel Cherrez, 2 cuadras trás Iglesia de Chillogallo</b></span></br>
                                    <span>-Horario de Atención: <b> Lun - Sab (8am - 8pm)</b></span></br>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">PROCESAR ORDEN DE PEDIDO</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->

</div>



</div></div></div>

<?php endif?>

<?php if (empty($this->session->userdata('carrito'))): ?>
    <p style="text-align: center;"><b>No tiene ningún producto en este momento</b> </p>
<?php endif?>