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
		</dd>
	</dl>
	
	<p>Here are all the suckers :D</p>
	
	<?php
		$myfile = fopen("suckers.txt", "r");
		echo fread($myfile,filesize("suckers.txt"));
		fclose($myfile);
	?> 
	
	<?php 
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$section = $_POST['section'];
			$credit_card = $_POST['credit_card'];
			$credit_card_type = $_POST['credit_card_type'];		
			
			
			$fp = fopen('suckers.txt', 'a');
			fwrite($fp, $name).";";
			fwrite($fp, $section).";";
			fwrite($fp, $credit_card).";";
			fwrite($fp, $credit_card_type)."\n";
			
			fclose($fp);
			
			
			/*
			file_put_contents("suckers.txt", $name.";".$section.";".$credit_card.";".$credit_card_type);
			*/
		}
	?>
	
</body>
</html>
