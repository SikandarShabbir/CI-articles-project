
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encryption And Decryption</title>
</head>
<body>
	<?= form_open('encrypt/encode'); ?>
	<?= form_label('Enter Your Message','message'); ?>
	<?= form_input('message'); ?>
	<?= form_submit('submit','Encode'); ?>
	<?= form_cose(); ?>
</body>
</html>