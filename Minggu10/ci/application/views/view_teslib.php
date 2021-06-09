<!DOCTYPE html>
<html>
<head>
	<title>Minggu 10</title>
</head>
<body>
	<?php
		$template = array(
			'table_open'=> '<table border ="1" cellpadding="4" cellspacing="0">',
			'table_close'=> '</table>');

		$this->table->set_template($template);
		$this->table->set_heading(array('No', 'Nama', 'Prodi'));
		$num = 1;

		foreach ($Mahasiswa as $row) {
			$this->table->add_row(array($num,$row['nama'],$row['prodi']));
			$num++;
		}

		echo $this->table->generate() . '<br />';

	echo 'Hasil benchmark mark elapsed_time 1 : ' . $this->benchmark->elapsed_time('start', 'between') . '<br/>';
	echo 'Hasil benchmark mark elapsed_time 2 : ' . $this->benchmark->elapsed_time('between', 'end') . '<br/>';
	echo 'Hasil benchmark mark elapsed_time 3 : ' . $this->benchmark->elapsed_time('start', 'end') . '<br/><br/>';

	echo 'Hasil benchmark mark memory_usage 1 : ' . $this->benchmark->memory_usage('start', 'between') . '<br/>';
	echo 'Hasil benchmark mark memory_usage 2 : ' . $this->benchmark->memory_usage('between', 'end') . '<br/>';
	echo 'Hasil benchmark mark memory_usage 3 : ' . $this->benchmark->memory_usage('start', 'end');
	?>
</body>
</html>