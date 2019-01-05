<?php	include("admin_header.php"); ?>


<div class="container">

	<?php echo form_open("admin/update_article/{$row->id}", array('class'=>'form-verticle')); ?>
	
	<!-- <div class="SetCenter"> -->

		<legend><h3>Edit Article</h3></legend> 
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
						<?php echo form_input(['name'=>'title','value'=>set_value('title',$row->title),'class'=>'form-control','placeholder'=>'Article Title']); ?>
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
						<?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article body','value'=>set_value('body',$row->body)]); ?>
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
				form_submit(['class'=>'btn btn-primary','value'=>'Update']) ?>
				<!-- <button type="submit" class="btn btn-primary">Submit</button>  -->
			</div> 
		</div>	
	</div>
			<?php form_close(); ?>


<?php include_once("admin_footer.php");?>

