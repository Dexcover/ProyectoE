<!DOCTYPE html>
<html lang="es">
<head>

<?php $this->view('metadatos'); ?>

    <meta name="description" content="Mira cómo se ilumina el rostro de quien amas con Bordintex. Participa en
    nuestro concurso y gana fabulos premios. Registrate">
    <title>Concurso - BordinTex</title>


    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>public/css/small-business.css" rel="stylesheet">
     
     

   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/demo.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/pater.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/component.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/custom.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/engine1/style.css" />
  <script type="text/javascript" src="<?php echo base_url();?>public/engine1/jquery.js"></script>

  <style>
.instuction {
  font-family: sans-serif, Arial;
  display: block;
  margin: 0 auto;
  max-width: 820px;
  width: 100%;
  padding: 0 70px;
  color: #222;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.instuction h1 img {
  max-width: 170px;
  vertical-align: middle;
  margin-bottom: 10px;
}
.instuction h1 {
  color: #2F98B3;
  text-align: center;
}
.instuction h2 {
  position: relative;
  font-size: 1.1em;
  color: #2F98B3;
  margin-bottom: 20px;
  margin-top: 40px;
}
.instuction h2 span.num {
  position: absolute;
  left: -70px;
  top: -18px;
  display: inline-block;
  vertical-align: middle;
  font-style: italic;
  font-size: 1.1em;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  background: #2F98B3;
  color: #fff;
  border-radius: 50%;
}
.instuction .mono {
  color: #000;
  font-family: monospace;
  font-size: 1.3em;
  font-weight: normal;
}
.instuction li.mono {
  font-size: 1.5em;
}

.instuction ul {
  font-size: 0.9em;
  margin-top: 0;
  padding-left: 0;
  list-style: none;
}
.instuction .note {
  color: #A3A3B2;
  font-style: italic;
  padding-top: 10px;
}
.instuction p.note {
  text-align: center;
  padding-top: 0;
  margin-top: 4px;
}
.instuction textarea {
  font-size: 0.9em;
  min-height: 60px;
  padding: 10px;
  margin: 0;
  overflow: auto;
  max-width: 100%;
  width: 100%;
}
.instuction a,
.instuction a:visited {
  color: #2F98B3;
}
</style>

<style >
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




@keyframes eo2-sold-out-swing {
    0% {
        transform: rotate(3deg)
    }

    50% {
        transform: rotate(-3deg)
    }

    100% {
        transform: rotate(3deg)
    }
}

.eo2-sold-out {
    position: absolute;
    top: 100px;
    right: 94px;
    width: 115px;
    height: 115px;
    z-index: 1;
    cursor: pointer;
    animation: eo2-sold-out-swing 2s ease-in-out forwards infinite;
    transform-origin: 50% 0;
    transition: top 150ms ease-in-out, opacity 150ms ease-in-out
}

.eo2-sold-out:hover {
    opacity: .8
}

.main-header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 6rem;
  color: white;
  background: #1E6262;
  line-height: 6rem;
  transform: translateY(0);
  transform: translate3d(0,0,0);
  transition: .25s transform;
  backface-visibility: hidden;
}

.main-header h1 {
  float: left;
  font-size: 1.4rem;
  margin: 0 0 0 2rem;
}

.main-header nav {
  float: right;
  font-size: 1.4rem;
}

.main-header nav ul { 
  margin: 0; 
  padding: 0; 
}

.main-header nav li {
  display: inline-block;
  padding: 0 2rem;
  border-left: .1rem solid #fff;
  background: #00AD7C;
}

main { 
  padding: 10rem 6rem;
  background: #EEE;
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




</head>

<body style="background-color: #e8e8e8;padding-top: 0px;">

<?php $this->view('logo'); ?>