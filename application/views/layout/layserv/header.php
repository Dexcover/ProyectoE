<html lang="es">

<head>
<?php $this->view('metadatos'); ?>
    <title>Servicio de Bordados en Quito - Computarizados</title>

    <meta name="description" content="Servicio de Bordados en Quito de la más alta calidad. Ofrecemos todo tipo de bordados computarizados, bordados de alto relieve, bordados para empresas y particulares, bordados en gorras, bordados en camisetas, etc. Enfocados en brindar en sus productos y servicios la más alta calidad, eficiencia y confiablidad, preocupados por el bienestar y economía de nuestra distinguida clientela" />


    <meta property="og:image" content="http://www.bordintex.com/imagenFocalNegocio.jpg" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/css/small-business.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/pater.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/component.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/normalize.css" />



    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/js/jQuery-svg-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/main.css">

<!--on imges -->
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css" />
        <script src="<?php echo base_url(); ?>public/js/modernizr.custom.97074.js"></script>

<style >
.ir-arriba {
    display:none;
    padding:20px;
    background:#024959;
    font-size:20px;
    color:#fff;
    cursor:pointer;
    position: fixed;
    bottom:20px;
    right:20px;
}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}




a{
    color: white;
}

.divider{
    margin: 20px auto;
    width: 100%;
    height: 1px;
    background: rgb(255,255,255); /* Old browsers */
    background: -moz-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(39,94,221,1) 50%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(39,94,221,1) 50%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  rgba(255,255,255,1) 0%,rgba(39,94,221,1) 50%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}

.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.filter-button.active
{
    background-color: #42B32F;
    color: white;
}
.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

/* center the navbar*/
.center.navbar .nav,
.center.navbar .nav > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
    *zoom:1; /* hasLayout ie7 trigger */
    vertical-align: top;
}

.center .navbar-inner {
    text-align:center;
}

.center .dropdown-menu {

}
</style>

<?php $this->view("layout/AnalisisDatos"); ?>
</head>

<body style="background-color: #e8e8e8;padding-top: 0px;">

 <?php $this->view('logo'); ?>