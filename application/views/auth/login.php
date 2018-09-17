<?php if(isset($mensaje)): ?>
    <div class="alert alert-danger ">
        <center>
            <?php echo $mensaje; ?>
        </center>
    </div>
<?php endif ?>

	<div class="container">
		<div class="row main">
			<div class="panel-heading">
		       <div class="panel-title text-center">
		       		<h1 class="font-titulos-paginas">Perfil de Usuario</h1>
					   <p class="font-subtitulo">Ingreso al Sistema</p>
		       		<hr/>
		       	</div>
		    </div>

			<div class="main-login main-center">

			<?php if(strcmp(ENVIRONMENT, "development") === 0):?>
					<form role="form" id="Formulario" action="<?=base_url("index.php/auth/login");?>" method="POST" enctype="multipart/form-data">
			<?php else: ?>
					<form role="form" id="Formulario" action="<?=base_url("auth/login");?>" method="POST" enctype="multipart/form-data">
			<?php endif; ?>	

					<div class="form-group">
						<label for="username" class="font-label-forms cols-sm-2 control-label">Usuario</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="user" id="user"  placeholder="Ingresar Nombre de Usuario" required/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="font-label-forms cols-sm-2 control-label">Contraseña</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="clave" id="clave"  placeholder="Ingresar Contraseña" required/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Ingresar</button>
					</div>

				</form>

						<div class="login-register">
				            Olvido su contrasena? <a style="color: green" href="<?php echo base_url('auth/restablecer') ?>">Restablecer contrasena</a>
				         </div>


				         <div class="login-register">
				            <a style="color: green" href="<?php echo base_url('auth/registrar') ?>">No tienes una cuenta?</a>
				         </div>
			</div>
			
		</div>
	</div>
</form>