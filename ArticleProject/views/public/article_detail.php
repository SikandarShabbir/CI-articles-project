<?php include_once('public_header.php'); ?>

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<td>Title</td>
				<td>Details</td>
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
<?php include_once('public_footer.php'); ?>
