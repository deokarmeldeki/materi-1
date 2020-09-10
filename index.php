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

CLASS Kucing{
		public $nama, $jlh_kaki, $bisa_terbang, $suara;

	}

$Kucing = new Kucing;
$Kucing->nama ="Flerken";
$Kucing->jlh_kaki ="4";
$Kucing->bisa_terbang ="tidak";
$Kucing->suara ="Miauwww";

echo "Kucing <br>";
echo "Nama : $Kucing->nama";
echo "<br>";
echo "Jumlah Kaki : $Kucing->jlh_kaki";
echo "<br>";
echo "Bisa Terbang : $Kucing->bisa_terbang";
echo "<br>";
echo "Suara : $Kucing->suara";
echo "<hr>";