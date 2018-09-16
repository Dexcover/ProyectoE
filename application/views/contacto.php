<?php if(isset($mensaje)): ?>

    <?php echo $mensaje; ?>

<?php endif ?>
<section>
    <div class="container">
       
        
        <h1 class="f-copyr" style="font-size: 50px" align="left">Contacto para Bordados<br></h1>
        <p>Te ayudamos con tu bordado a través de este formulario, como por ejemplo: 
        <ul>
            <li>Parches Bordados.</li>
            <li>Bordados personalizados en prendas.</li>
            <li>Ordenes de prendas.</li>
            <li>Diseños de imagen para procesos de Bordado.</li>
            <li>ó simplemente utilizalo para comunicarte con nosotros.</li>
        </ul>
        
        
        </p>
       
        
        
        <div class="container">
            
        <?php if(strcmp(ENVIRONMENT, "development") === 0):?>
            <form role="form" id="Formulario" action="<?=base_url("index.php/contacto/contactarSecurity");?>" method="POST" enctype="multipart/form-data">
        <?php else: ?>
            <form role="form" id="Formulario" action="<?=base_url("contacto/contactarSecurity");?>" method="POST" enctype="multipart/form-data">
        <?php endif; ?>
               
            
            <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="Motivo">Motivo:</label>
                        <select name="Motivo" class="form-control">
                            <option selected value="Consulta General">Consulta General</option>
                            <option value="Parches Bordados">Parches Bordados</option>
                            <option value="Bordados personalizados en prendas">Bordados personalizados en prendas</option>
                            <option value="Ordenes de prendas.">Ordenes de prendas.</option>
                            <option value="Diseños de imagen para procesos de Bordado.">Diseños de imagen para procesos de Bordado.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Empresa">Empresa o Nombre</label>
                        <input type="text" class="form-control" id="Empresa" name="Empresa" placeholder="Introduzca el nombre de su empresa o su nombre" required />
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="Correo">Dirección de Correo Electrónico</label>
                        <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduzca su correo electrónico" required />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Mensaje">Mensaje</label>
                        <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Por favor, utilize este espacio para detallar elementos como: tipo de tela, lugar de aplique de los diseños, si cuenta o no con la prenda en donde va a bordar, etc." required ></textarea>
                    </div>
                </div>

                 <article class="form-group">
                    <label for="files">Diseños a Cotizar: <u>Solo se permite diseños en formato imagen.</u> </label>
                    <input id="files" name="files[]" type="file" multiple/>
                    <output id="result" style="display: inline"></output>
                    <button class="form-control btn-primary" type="button" id="clear">Borrar Fotos</button>
                </article>


                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value="Enviar" id="enviar">
                </div>
                <div id="respuesta" style="display: none;"></div>
            </form>
        </div>
    </div>
</section>
        <div class="divider"></div>
        <center>
            <p>Utiliza el <a style="color: blue" href="https://www.bordintex.com/cotizar/"><u>Cotizador General de Bordados</u></a> para cotizar tu bordado de manera <u><b>gráfica y facíl</b></u> en prendas tradicionales como: camisetas, chompas, buzos y sudaderas.</p>
            <img src="https://www.bordintex.com/public/images/seocgeneral.png" class="img-responsive">
        </center>
        <div class="divider"></div>
