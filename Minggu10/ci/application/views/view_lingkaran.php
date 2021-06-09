<!DOCTYPE html>
<html>
<head>
	<title>Minggu 10</title>
</head>
<body>
	<hr>
	<?php
		echo 'Hasil elapsed_time : ' . $this->benchmark->elapsed_time('mulai', 'akhir');
		echo '<br>Hasil elapsed_time : ' . $this->benchmark->memory_usage('mulai', 'akhir');
	?>
</body>
</html>