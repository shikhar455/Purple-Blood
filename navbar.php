<body>
    <header id="header">
    <div class="container-fluid bg-color">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto"><img src="img/pblogo.png"></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#register">Registration</a></li>
          <li><a href="#testimonials">Find Band</a></li>
          <li><a href="#contact">Contact</a></li>
		  <li><a href="#" data-toggle="modal" data-target="#at-login">Login</a></li>	
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section class="at-login-form">
				<!-- MODAL LOGIN -->
				<div class="modal fade" id="at-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document" style="width: auto;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							</div>
							<?php if(isset($_GET['error']))	echo $_GET['error'];?>
							<div class="modal-body">
										<form action="login_check.php" method="post">
											<div class="form-group">
												<input type="email" name="email" class="form-control-form " id="email" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" name="pwd" class="form-control-form " id="pwd" placeholder="Password">
											</div>
											<div class="row">	
												<div class="col-md-6">
													<div class="checkbox">
														<label>
															<input type="checkbox"> Remember me
														</label>
													</div>	
												</div>
												<div class="col-md-6 col-md-offset-3">	
													<p class="frgt-pswd"   data-toggle="modal" data-dismiss="modal"  data-target="#at-reset-pswd">Forgot Password ?</p>
												</div>
											</div>
											<input type="submit" name="submit" class="btn-lgin" value="login">
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- MODAL LOGIN ENDS -->
					<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document" style="width:auto;">
						<div class="modal-content ">
						<div class="modal-header ">
                    	</div>
							<?php if(isset($_GET['error']))	echo $_GET['error'];?>
							<div class="modal-body alert alert-success alert-dismissible fade show">
                                 <span id="success_message"></span>
				                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
				        		</div>
								</div>
							</div>
						</div>
						<!-- MODAL LOGIN ENDS -->
								<!-- MODAL FORGOT PASSWORD -->
								<div class="modal fade" id="at-reset-pswd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document" style="width:auto;">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											</div>
											<div class="modal-body">
												<form>
													<p>	Enter the email address associated with your account, and we’ll email you a link to reset your password. </p>
													<div class="form-group">

														<input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
													</div>
												</form>
											</div>
											<div class="modal-footer">
											</div>
										</div>
									</div>
								</div>
			</section>  
	
	