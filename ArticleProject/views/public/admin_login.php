<?php	include("public_header.php"); ?>


<div class="container">

	<?php echo form_open('login/admin_login', ['class'=> 'form-horizontal']); ?>
	<!-- <div class="SetCenter"> -->
	<fieldset ">
		<legend >Admin Login</legend> 
		<?php if( $error = $this->session->flashdata('login_failed')):?>
			<div class="row">
				<div class="col-lg-6">
					<div class="alert alert-dismissible alert-danger">
						<?= $error ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="row" >
			<div class="col-lg-6">
				<div class="form-group">
					<label for="exampleInputEmail1">User Name</label>
					<?php echo form_input(['name'=>'username','value'=>set_value('username'),'class'=>'form-control','placeholder'=>'Enter Username']); ?>
					<!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  -->
				</div>
			</div>		
			<div class="col-lg-6">
				<?php echo form_error("username"); ?>
			</div>
		</div>           
		
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
			</div>	
			<div class="col-lg-6">
				<?php echo form_error('password'); ?>
			</div>
		</div>
		
		<!-- <div class="form-group"> -->

			<?=
			// echo form_reset(['class'=>'btn btn-secondary','value'=>'Reset','name'=>'reset']),
			form_submit(['class'=>'btn btn-primary','value'=>'Login','name'=>'submit']); ?>
			<!-- <button type="submit" class="btn btn-primary">Submit</button>  -->
			<!-- </div>  -->
			<!-- </div>	 -->
		</div>
	</fieldset>
		<?php include("public_footer.php");?>