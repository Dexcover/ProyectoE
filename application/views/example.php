<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
foreach ($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach;?>
<?php foreach ($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach;?>
</head>
<body>

	<div style="text-align: center;" class="container">

		<div class="row " style="text-align: center;"><div class="col-md-12 "> <a href="<?php echo base_url(); ?>"><img alt="logo principal" height="80px" style="margin-top: 20px" src="<?php echo base_url(); ?>public/images/AMISTADlogo principal.png"></a></div></div>
		<h1>Módulo Administrador</h1>
		<div>

			<a href='<?php echo $this->config->item('base_url_admin'); ?>examples/subcategoria'>CATEGORIAS EN BORDADOS</a> |
			<a href='<?php echo $this->config->item('base_url_admin'); ?>examples/items'>ITEMS POR CADA CATEGORIA</a> |
			<a href='<?php echo $this->config->item('base_url_admin'); ?>examples/cupones'>CUPONES</a> |
			<a href='<?php echo $this->config->item('base_url_admin'); ?>examples/metricas'>METRICAS</a> |
			
			<a href='<?php echo $this->config->item('base_url'); ?>pedido'>EXPLORAR PEDIDOS</a>


		</div>



	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
<img width="950" height="550" src="https://i.ytimg.com/vi/-_vAAiq0t44/maxresdefault.jpg"/>
</div>
</body>
</html>
