  <!DOCTYPE html>
  <html lang="es">
  <head>
   
   <?php $this->view('metadatos'); ?>

   <title>Bordintex - Excelencia en Bordados en Quito</title>
   <meta name="description" content="Servicio de Bordados en Quito de la más alta calidad. Ofrecemos todo tipo de bordados computarizados, bordados de alto relieve, bordados para empresas y particulares, bordados en gorras, bordados en camisetas, etc. Enfocados en brindar en sus productos y servicios la más alta calidad, eficiencia y confiablidad, preocupados por el bienestar y economía de nuestra distinguida clientela" />
   <meta property="og:image" content="https://www.bordintex.com/public/images/seoim.jpg" />
   <!-- Custom CSS -->
   <link href="<?php echo base_url(); ?>public/css/small-business.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>public/css/seccioncategorias.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/ofertas/slick.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/ofertas/slick-theme.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/engine1/home/style.css" />
   <script type="text/javascript" src="<?php echo base_url(); ?>public/engine1/home/jquery.js"></script>

  <?php $this->view("layout/AnalisisDatos"); ?>

  <style>
    #productosEspeciales{
      height: 310px;
      box-sizing: border-box;
    }

     #imagenProducto {
      height: 150px;
      box-sizing: border-box;
    }

    #nombreProducto {
      margin-top: 15px;
      height: 40px;
      box-sizing: border-box;
    }

    #precioAnterior{
      height: 15px;
      box-sizing: border-box;
    }

    #precioAhora{
      height: 40px;
      box-sizing: border-box;
    }

    #botonComprar{
      height: 30px;
      box-sizing: border-box;
    }
  
  </style>
</head>

<body style="background-color: #e8e8e8;padding-top: 0px;">

  <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11&appId=664489967046162';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

 <?php $this->view('logo'); ?>

 