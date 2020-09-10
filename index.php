<?php

	class Mobil {
		public $merk, $tipe, $mesin, $max_speed;

		public function cetakTipe(){
			return $this->tipe;
		}
		function kecepatanMaksimal(){
			return "Kecepatan Maksimal Mobil ini adalah".$this->max_speed;
		}
	}

$bmw = new Mobil;
$bmw->merk ="BMW";
$bmw->tipe ="0364";
$bmw->mesin ="2000cc";
$bmw->max_speed ="500km/h";

echo "Tipe".$bmw->cetakTipe();
echo "<br>";
echo " ".$bmw->kecepatanMaksimal();