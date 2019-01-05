<?php include_once('admin_header.php'); ?>

<div class="container">
	<?= anchor('admin/dashboard','Dashboard',["class" => "btn btn-primary"]);?>
	<!-- // <?= anchor('phpexcel/download','Download .xls file',["class" =>"btn btn-success float-right"]); ?> -->
	<table class="table">
		<thead>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Date</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<!-- <div class="col-lg-0"> -->
						<h4>
							<?= $articles->title ?>
						</h4>
					<!-- </div>					 -->
				</td>
				<td>						
					<!-- <div class="col-lg-6"> -->
						<em><?= $articles->body ?></em>
					<!-- </div> -->
				</td>
				<td>
					<!-- <div class="col-lg-6"> -->
						<?= date('d M y h:i:s', strtotime($articles->created_at) ); ?>
					<!-- </div> -->
				</td>
			</tr>
		</tbody>
	</table>

</div>
<?php include_once('admin_footer.php'); ?>
