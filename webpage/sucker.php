<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="buyagrade.css" type="text/css" rel="stylesheet"/>
    <title>Data Recieved</title>
</head>
<body>
	<h1>Thanks, sucker!</h1>
	
	<p>Your information has been received.</p1>
	
	
	<dl>
		<dt>Name</dt>
		<dd>
			<?= $_REQUEST['name'] ?>
		</dd>
		
		<dt>Section</dt>
		<dd>
			<?= $_REQUEST['section'] ?>
		</dd>
		
		<dt>Credit Card</dt>
		<dd>
			<?= $_REQUEST['credit_card'] ?>
			<?= $_REQUEST['credit_card_type'] ?>
		<dd>

		</dd>
	</dl>
			
</body>
</html>
