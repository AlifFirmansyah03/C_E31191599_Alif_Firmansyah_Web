<?php
	class tablet {
		protected $merk;
		protected $camera;
		protected $memory;

		protected function merk()
		{
			return $this -> merk;
		}
		public function tampil_merk()
		{
			return 'ROG Phone 3';
		}

		protected function camera()
		{
			return $this -> camera;
		}
		public function tampil_camera()
		{
			return '64MP';
		}
		
		protected function memory()
		{
			return $this -> memory;
		}
		public function tampil_memory()
		{
			return '256GB';
		}
	}

	class handphone extends tablet {
		protected $handphone_baru;

		protected function handphone_baru()
		{
			return $this -> handphone_baru;
		}
		public function beli_handphone()
		{
			return 'Second';
		}
	}

	$handphone1 = new handphone();
	
	echo '<b>Spesifikasi (Hak Akses Dari Protected)</b><br /><br />';
	echo 'Merk : ' . $handphone1 -> tampil_merk() . '<br />';
	echo 'Kamera : ' . $handphone1 -> tampil_camera() . '<br />';
	echo 'Memory : ' . $handphone1 -> tampil_memory() . '<br />';
	echo 'Kondisi : ' . $handphone1 -> beli_handphone() . '<br /><hr >';
?>