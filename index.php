<?php
	echo "ANIMAL <hr>";

	CLASS Angsa{
		public $nama, $jlh_kaki, $bisa_terbang, $suara;

	}

$Angsa = new Angsa;
$Angsa->nama ="Nana";
$Angsa->jlh_kaki ="2";
$Angsa->bisa_terbang ="tidak";
$Angsa->suara ="kwwaakk";

echo "Angsa <br>";
echo "Nama : $Angsa->nama";
echo "<br>";
echo "Jumlah Kaki : $Angsa->jlh_kaki";
echo "<br>";
echo "Bisa Terbang : $Angsa->bisa_terbang";
echo "<br>";
echo "Suara : $Angsa->suara";
echo "<hr>";