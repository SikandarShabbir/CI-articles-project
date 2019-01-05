


<div class="container">
	
	<h1>Contact Form</h1>
	<?= form_open('email/sent'); ?>
	<?= form_label('Name'); ?>
	<?= form_input('name'); ?>	
	<br>
	<?= form_label('From'); ?>
	<?= form_input('from'); ?>
	<br>
	<?= form_label('Subject'); ?>
	<?= form_input('subject'); ?>
	<br>
	<?= form_label('Message'); ?>
	<?= form_textarea('message'); ?>
	<br>
	<?= form_submit('submit','Send'); ?>
	<?= form_close(); ?>

</div>