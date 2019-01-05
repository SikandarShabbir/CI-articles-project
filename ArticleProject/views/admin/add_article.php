<?php	include("admin_header.php"); ?>


<div class="container">

	<?php echo form_open('admin/store_article', array('class'=>'form-verticle')); ?>
	<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
	<!-- <?= form_hidden('created_at', date('Y-m-d H:i:s'));?> -->
	<!-- <div class="SetCenter"> -->

		<legend><h3>Add Article</h3></legend> 
		<!-- <?php if( $error = $this->session->flashdata('login_failed')):?>
			<div class="row">
				<div class="col-lg-6">
					<div class="alert alert-dismissible alert-danger">
						<?= $error ?>
					</div>
				</div>
			</div>
		<?php endif; ?> -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="Email1" class="control-label col-lg-4"> Article Title </label>
					<div class="col-lg-8">
						<?php echo form_input(['name'=>'title','value'=>set_value('title'),'class'=>'form-control','placeholder'=>'Article Title']); ?>
					</div>
					<!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  -->
				</div>
			</div>	

			<div class="col-lg-6">
				<?php echo form_error("title"); ?>
			</div>
		</div>           
		
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="Password" class = "col-lg-4 control-label">Article Body</label>
					<div class="col-lg-8">
						<?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article body','value'=>set_value('body')]); ?>
					</div>
					<!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
				</div>
			</div>	
			<div class="col-lg-6">
				<?php echo form_error('body'); ?>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">  		
				<?php echo form_reset(['class'=>'btn btn-secondary','value'=>'Reset','name'=>'reset']),
				form_submit(['class'=>'btn btn-primary','value'=>'Submit','name'=>'submit']) ?>
				<!-- <button type="submit" class="btn btn-primary">Submit</button>  -->
			</div> 
		</div>	
	</div>
</form>


<?php include_once("admin_footer.php");?>

