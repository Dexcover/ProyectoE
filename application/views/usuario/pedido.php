
<div class="container">
	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Información de Pedidos Realizados</div>
	  <div class="panel-body">
	    <p>Estimad@ <b><?=$this->session->userdata('nombres');?></b>, aquí encontrará los pedidos realizados en nuestra página. con el fin de pueda realizar un seguimiento de sus pedidos.</p>

	  <!-- Table -->
	  <?php if (empty($misPedidos)): ?>
	  	<p style="text-align: center;"><b>No tiene pedidos en este momento</b> </p>

	  <?php endif?>
	  </div>
	  <?php if (!empty($misPedidos)): ?>
	  	<div style="overflow-x:auto;">
	  <table class="table table-hover table-condensed table-bordered">
	   <thead>
		   	<tr> <th>Código de Pedido</th>
		   		<?php if ($this->session->userdata('id_usuario') == 3): ?>
		   		 <th>Usuario</th>
		   		<?php endif?>
			   	 <th>Fecha y Hora</th>
			   	 <th>Información</th>
			   	 <th><b style="color: red">Mensajes administrador</b></th>
			   	 <th>Precio Total pedido</th>
			   	 <th>Cupón Aplicado</th>
			   	 <th>Estado</th>
		   	</tr>
	   	</thead>
	   	<tbody>
	   		<?php foreach ($misPedidos as $pedidos): ?>
	   		<tr>
	   		 	<th id="pedido<?=$pedidos['ID_PEDIDO'];?>" scope="row">PD-<?=$pedidos['ID_PEDIDO'];?>BEB</th>

	   		 	<?php if ($this->session->userdata('id_usuario') == 3): ?>
		   		 <td><?=$pedidos['apellido'];?> </td >
<?php endif?>



	   		 	 <td><?=$pedidos['FECHA'];?></td>
	   		 	 <td><?=$pedidos['DIRECCION_ENVIO'];?></td>
	   		 	 <td><?=$pedidos['ESTADO'];?></td> <td>$<?=$pedidos['TOTAL_COBRAR'];?></td>
	   		 	 <td><?=$pedidos['cupon'];?></td>
	   		 	 <td><button id="botton<?=$pedidos['ID_PEDIDO'];?>" class="btn btn-primary" onclick="detallePedido(<?=$pedidos['ID_PEDIDO'];?>)" >Detalles</button> </td>

	   		 	 <?php if ($pedidos['ID_TARJETA'] == 9999): ?>

	   		 	 	<td><button id="btndeposite<?=$pedidos['ID_PEDIDO'];?>" class="btn btn-success" onclick="yaDeposite(<?=$pedidos['ID_PEDIDO'];?>)" >Enviar Mensaje</button> </td>

	   		 	 <?php endif?>

	   		 	<?php if ($this->session->userdata('id_usuario') == 3): ?>
	   		 		<td><button id="botton<?=$pedidos['ID_PEDIDO'];?>" class="btn btn-primary" onclick="detallePedido(<?=$pedidos['ID_PEDIDO'];?>)" >Enviado</button></td>
	   		 		<td><button id="botton<?=$pedidos['ID_PEDIDO'];?>" class="btn btn-primary" onclick="detallePedido(<?=$pedidos['ID_PEDIDO'];?>)" >No enviado</button></td>
	   		 	<?php endif?>
	   		</tr>
	   		<?php endforeach?>

	   	</tbody>
	  </table>
	  <div id="divDetalles" hidden="true">
	  	<p style="text-align: center;"><b>Detalle de Pedidos</b> </p>
		  <table class="table table-hover table-condensed table-bordered">
		   <thead>
			   	<tr> <th>Producto</th>
				   	 <th>Cantidad Pedida</th>
			   	</tr>
		   	</thead>
		   	<tbody id="detalle_pedido">

		   	</tbody>
		  </table>
	  </div>
	   <?php endif?>
	</div>
</div>