  <!DOCTYPE html>
  <html lang="es">
  <head>
  <?php $this->view('metadatos'); ?>
   <meta property="og:image" content="http://www.bordintex.com/public/images/seocgeneral.png" />
   <meta property="og:locale" content="es_ES" /> <title>Bordintex - Cotizador General de Bordados</title>
   <meta name="description" content="Cotiza tu bordado en prendas tradicionales como: camisetas, chompas, buzos, sudaderas, etc. En una herramienta gráfica y muy fácil de utilizar." />
   <link href="<?php echo base_url(); ?>public/css/small-business.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>public/cotizador/css/normalize.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>public/cotizador/js/jquery-1.10.2.js">  </script>
<link href="<?php echo base_url(); ?>public/cotizador/tdesignAPI/css/api.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url(); ?>public/cotizador/tdesignAPI/js/html2canvas.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>public/cotizador/tdesignAPI/css/jquery-ui.css" />
<script src="<?php echo base_url(); ?>public/cotizador/tdesignAPI/js/jquery-ui.js"></script>

   <?php $this->view("layout/AnalisisDatos"); ?>
          
<script src="<?php echo base_url(); ?>public/cotizador/tdesignAPI/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>public/cotizador/tdesignAPI/js/mainapp.js"></script>
</head>

<body style="background-color: #e8e8e8;padding-top: 0px;">
<?php $this->view('logo'); ?>

