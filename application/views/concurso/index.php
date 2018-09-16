 <div class="row">
  <?php if(isset($mensaje)): ?>

    <?php echo $mensaje; ?>

<?php endif ?>
 <div class="col-md-6">
<div id="wowslider-container1">
<div class="ws_images" style="margin-top: 35px;s"><ul>
        <li><img src="<?php echo base_url(); ?>public/data1/images/cslider1.jpg" alt="Concursa y Gana!" title="Concursa y Gana!" id="wows1_0"/></li>
        <li><img src="<?php echo base_url(); ?>public/data1/images/cslider2.jpg" alt="Día de la Madre, Descuentos!" title="Día de la Madre, Descuentos!" id="wows1_1"/></li>
        <li><a href="http://wowslider.com"><img src="<?php echo base_url(); ?>public/data1/images/cslider3.jpg" alt="http://wowslider.com/" title="Expresa tus sentimientos con un detalle Personalizado" id="wows1_2"/></a></li>
        <li><img src="<?php echo base_url(); ?>public/data1/images/cslider4.jpg" alt="Para Parejas ¡Descuentos!" title="Para Parejas ¡Descuentos!" id="wows1_3"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="Concursa y Gana!"><span><img src="<?php echo base_url(); ?>public/data1/tooltips/cslider1.jpg" alt="Concursa y Gana!"/>1</span></a>
        <a href="#" title="Día de la Madre, Descuentos!"><span><img src="<?php echo base_url(); ?>public/data1/tooltips/cslider2.jpg" alt="Día de la Madre, Descuentos!"/>2</span></a>
        <a href="#" title="Expresa tus sentimientos con un detalle Personalizado"><span><img src="<?php echo base_url(); ?>public/data1/tooltips/cslider3.jpg" alt="Expresa tus sentimientos con un detalle Personalizado"/>3</span></a>
        <a href="#" title="Para Parejas ¡Descuentos!"><span><img src=<?php echo base_url(); ?>public/data1/tooltips/cslider4.jpg" alt="Para Parejas ¡Descuentos!"/>4</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>  
</div>


<div class="col-md-6">
    

  <div class="page-header" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-bottom: 0px;">
                    <h2  class="font-titulos" style="margin-left: 30px;margin-top: 30px;">SuperConcurso: <small  class="font-enfasis">Llena la siguiente información y estarás participando para ganarte <b>Una gorra personalizada o premio sorpresa</b></small></h2>
                </div>


<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Paso 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Paso 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Paso 3</p>
        </div>
    </div>
</div>
<form role="form" method="post" action="concursar">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 1: Información para concursar</h3>
                <div class="form-group">
                    <label class="control-label">Nombre Completo</label>
                    <input  name="name" maxlength="150" type="text" required="required" class="form-control" placeholder="Ingresa Nombre Completo"  />
                </div>
                <div class="form-group">
                    <label class="control-label">correo electrónico <i style="color: orange">Si no tienes no importa</i></label>
                    <input name="mail" maxlength="150" type="text"  class="form-control" placeholder="Ingresa e-mail" />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 2: ¿Donde te enviamos el premio?</h3>
                <div class="form-group">
                    <label class="control-label">Dirección o medio para entregarte el premio</label>
                    <input name="add" maxlength="200" type="text"  class="form-control" placeholder="Ingresa tu dirección" />
                </div>
                <div class="form-group">
                    <label class="control-label">Telefono para llamarte</label>
                    <input name="telf" maxlength="11" type="number" required="required" class="form-control" placeholder="Ingresa tu teléfono"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Ultimo Paso</h3>
                <h5>Verifica los datos que has ingresado y dale al boton "Participar"</h5>
                <button class="btn btn-success btn-lg pull-right" >Participar!</button>
                

                
            </div>
        </div>
    </div>
</form>


 </div>




</div>

<div style="text-align: center;">
<div class='divider'></div><h5>Inscribite y participa para proximos concursos!</h5>


    <a style="cursor: pointer; color: green; font-size: 24px" onclick="validarTelefono();"  class="font-menus" > <i class="fa fa-whatsapp" aria-hidden="true"></i>
                wasapealo con tus panas para que puedan concursar!</a>
</div>