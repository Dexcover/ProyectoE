
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">


                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?php echo $this->session->userdata("nick") ?></h2>
                            <p>cédula:   <b> <?php echo $this->session->userdata("cedula") ?></b></p>


                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php echo $this->session->userdata("nombres") ?> <?php echo $this->session->userdata("apellidos") ?> </p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $this->session->userdata("correo") ?></p></li>
                          </ul>
                          <hr>
                          <!--<div class="col-sm-5 col-xs-6 tital " >Date Of Joining: 15 Jun 2016</div>-->
                      </div>
                </div>

