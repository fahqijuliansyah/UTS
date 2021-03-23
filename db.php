<html>
<head>
<title>Data Pemantauan Covid19</title>
</head>
<body>

<?php
$prov = $_POST['nama_wilayah'];
$nama = $_POST['n_operator'];
$nim = $_POST['nim'];
$positif = $_POST['j_positif'];
$rawat = $_POST['j_rawat'];
$sembuh = $_POST['j_sembuh'];
$meninggal = $_POST['j_meninggal'];

switch ($prov) {
	case "dki":
	$prov = "DKI Jakarta";
	break;
	
	case "jabar":
	$prov = "Jawa Barat";
	break;
	
	case "banten":
	$prov = "Banten";
	break;
	
	case "jateng":
	$prov = "Jawa Tengah";
	break;
}

function tgl ($tanggal) {
	$bulan = array (
	1 => 'Januari',
	'Februari',
	'Maret',
	'April',
	'Mei',
	'Juni',
	'Juli',
	'Agustus',
	'September',
	'Oktober',
	'November',
	'Desember'
	);
	$tanda = explode('-', $tanggal);
	return $tanda[2] . ' ' . $bulan[(int)$tanda[1] ] . ' ' . $tanda[0];
}

date_default_timezone_set('Asia/Jakarta');
$jam = date("H:i:s");
?>

<center>
<td>

<?php
echo "Data Pemantauan Covid19 Wilayah $prov<br>";
echo "Per " . tgl(date('Y-m-d'));
echo " ".$jam."<br>";
echo "$nama / $nim";
?>

</td>
<tr><br></tr>
<tr><br></tr>
<table  width="50%" height="10%" border="1" cellspacing="0" cellpadding="5">
<tr>
<td>Positif</td>
<td>Dirawat</td>
<td>Sembuh</td>
<td>Meninggal</td>
</tr>

<tr>
<td><?php echo $positif; ?></td>
<td><?php echo $rawat; ?></td>
<td><?php echo $sembuh; ?></td>
<td><?php echo $meninggal; ?></td>
</tr>
</table>
</center>
</body>
</html>