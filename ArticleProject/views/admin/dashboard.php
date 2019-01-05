<?php include_once('admin_header.php'); ?>

<!-- // <?php #print_r($articles); ?> -->
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<?= anchor('user','All Articles',['class'=>'btn btn-primary float-left'])?>
		</div>
		<div class="col-lg-4 text-center">
			<?= anchor('Phpexcel/download','Downlaod .xls',['class'=> 'btn btn-success']); ?>
		</div>
		<div class="col-lg-4">
			<?= anchor('admin/add_article','Add Article',array('class'=>'btn btn-primary float-right')); ?>

			<!-- <a href=""class="btn btn-primary float-right "> Add Article </a> -->
			
		</div>
	</div>
	<?php if( $feedback = $this->session->flashdata('feedback')):
	$feedback_class = $this->session->flashdata('feedback_class');
	?>
	<div class="row">
		<div class="col-lg-offset-3 col-lg-6 ">
			<div class="alert alert-dismissible <?= $feedback_class ?>">
				<?= $feedback ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<table class="table">
	<thead>
		<td>Sr. No</td>
		<td>Title</td>
		<td>Date</td>
		<td>Action</td>
	</thead>
	<tbody>
		<?php if (count($articles)): 
		$count = $this->uri->segment(3,0);
		foreach ($articles as $article): ?>
		<tr>
			<td><?= ++$count ?></td>
			<td><?= anchor("admin/article/{$article->id}",$article->title); ?> </td>
			<td><?= date('d M y h:i:s', strtotime($article->created_at) ); ?></td>
			<td>
				<div class="row">
					<div class="col-lg-2">
						<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
						<!-- <button class="btn btn-primary">Edit </button>					 -->
					</div>
					<div class="col-lg-2">
						<?=
						form_open('admin/delete_article'),
						form_hidden('article_id',$article->id),
						form_submit(['value'=>'Delete','class'=>'btn btn-danger']),
						form_close();
						?>
						<!-- <button class="btn btn-danger">Delete </button>				 -->
					</div>
				</div> 											
			</td>
		</tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="3"> No Records Found.</td>
	</tr>
<?php endif ?>		

</tbody>
</table>

<?= $this->pagination->create_links(); ?>
</div>


<?php include_once('admin_footer.php'); ?>
