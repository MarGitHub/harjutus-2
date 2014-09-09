<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-2 - PHP põhitõed
	</title>
</head>

<body>
	<h1>See dokument on minu esimene katsetus PHP-ga</h1>
	<?php echo "Tere! " . "siin on teine tekst" . " siin ka"; 
			echo "<br>"; 
			echo "Järgmine rida"; 
		?>
		
		<br>
		<h2>Arvutamine</h2>
	<p>Siin teeme erinevaid tehteid. </p>
	<!-- HTML kommentaar -->
	
	<?php 
		// siin on kommentaar
		echo "Nelja ja viie summa on " . (4+5); 
	?>
	<br>
	<?php echo 4-5; ?>
	<br>
	<?php echo 4*5; ?>
	<br>
	<?php echo 4/5; ?>
	
	<h2>Muutujad</h2>
	<?php
		$number = 5 - 4; 
		$number2 = 9; 
		$text = "Kahe arvu summa on"; 
		
		echo "<p>Siia tuleb list</p>
		<ul>
		<li> " . $text . "</li> 
		<li>" . ($number + $number2) . "</li>
		</ul>"; 
	?>
	
</body>

</html>