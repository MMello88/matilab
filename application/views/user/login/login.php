<div class="container-fluid" style="position:absolute; height: 100%; background-image:url('<?= base_url('assets/images/pexels-photo-30732.jpg') ?>');  background-position: center; background-repeat: no-repeat; background-size: cover; z-index: -1;"></div>

<section id="login">
	<div class="container col-lg-7" style="padding-top:100px;">
		<div class="card">
		    <div class="card-header">
			   Loginho
		    </div>
		    
		    <div class="card-body">
				<div class="container col-lg-5 offset-lg-1">
					<?php if (validation_errors()) : ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong>Ops!</strong> <?= validation_errors() ?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong>Ops!</strong> <?= $error ?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif; ?>

					<h3 class="pb-2">Entrar no MatiLab</h3>
					<?= form_open("login", array("class" => "form")) ?>
						<div class="form-group">
							<!--<label for="exampleInputEmail1">Email address</label>-->
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						
						<div class="form-group">
							<!--<label for="exampleInputPassword1">Password</label>-->
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>

						<input type="submit" class="btn btn-primary rounded-pill" value="Login">
						<div class="form-group form-check pt-3 pb-0">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Lembre me - </label>
							<a href="<?= base_url('forgot') ?>" class="link">Esqueceu sua senha?</a>
						</div>
						<!--<div class="pull-left">
							<h6>
								<a href="<?= base_url('register') ?>" class="link">Inscreva-se agora</a>
							</h6>
						</div>
						<div class="pull-right">
							<h6>
								
							</h6>
						</div> -->
					</form>
					
				</div>
			
		    </div>
			<div class="card-footer text-muted">
				<div class="container col-lg-5 offset-lg-1">
					<p>Novo no MatiLab? <a href="<?= base_url('register') ?>" class="link">Inscreva-se agora</a></p>
				</div>
			</div>
		</div>

		
	</div>
</section>