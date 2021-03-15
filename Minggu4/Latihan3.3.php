<?php
	class tablet {
		private $merk;
		private $camera;
		private $memory;

		private function merk()
		{
			return $this -> merk;
		}
		public function tampil_merk()
		{
			return 'Xiaomi Mi 10 Pro';
		}

		private function camera()
		{
			return $this -> camera;
		}
		public function tampil_camera()
		{
			return '108MP';
		}
		
		private function memory()
		{
			return $this -> memory;
		}
		public function tampil_memory()
		{
			return '256GB';
		}
	}

	class handphone extends tablet {
		public $handphone_baru;

		private function handphone_baru()
		{
			return $this -> handphone_baru;
		}
		public function beli_handphone()
		{
			return 'Baru';
		}
	}

	$handphone1 = new handphone();
	
	echo '<b>Spesifikasi (Hak Akses Dari Private)</b><br /><br />';
	echo 'Merk : ' . $handphone1 -> tampil_merk() . '<br />';
	echo 'Kamera : ' . $handphone1 -> tampil_camera() . '<br />';
	echo 'Memory : ' . $handphone1 -> tampil_memory() . '<br />';
	echo 'Kondisi : ' . $handphone1 -> beli_handphone() . '<br /><hr >';

?>