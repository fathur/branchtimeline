<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/rantingwaktu.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class='container-fluid'>
		<?php for ($i=1; $i < 20; $i++) : 			
			$classrow = ($i%2) ? 'rw-genap' : 'rw-ganjil' ;
		?>
			
		<div class='row <?php echo $classrow; ?>'>
			<div class='col-md-2'><?php echo $i; ?></div>
			<div class='col-md-8'>
				<div class='rw-title'>Sejarah harus diingat</div>
			</div>
			<div class='col-md-1'>Comment</div>
			<div class='col-md-1'>Bookmark</div>
		</div>
		
		<?php endfor; ?>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<script>
	$('.rw-title').click(function() {
		$(this).height(100);
	});
	</script>
</body>
</html>