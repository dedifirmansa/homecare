<?php
include "config.php";
include "index.php";

if (isset($_POST['cetak'])){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $perawat = $_POST['perawat'];
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];
    
    echo $link_yics->query("INSERT INTO pelanggan VALUES('$nama', '$jenis_layanan', '$tgl', '$telp', '$perawat', '$jam')");
    // $ceknis = mysqli_num_rows(mysqli_query($link_yics, "SELECT nama FROM pelanggan WHERE nama='$nama' AND tgl='$tgl'"));

   }

//      $tanggal = date("m/y");
//      $tgl = date("d/m/y");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Surat Perjanjian</title>
</head>
<body>
	<h1>KLINIK PRATAMA ZAENUDIN</h1>
	
    <p>Dusun Tebek, Desa Kabul, Kec. Praya Barat Daya, Kab. Lombok Tengah, Prov. Nusa Tenggara Barat. Kode Pos: 83571</p>
	<p>__________________________________________________________________________________</p>
    <h1>SURAT PERJANJIAN</h1>
	<p>Kepada Yth. <?php echo $nama; ?></p>
	<p>Dengan ini kami menyatakan bahwa kami, <`Bold>Zaenudin, Ners.</> Dan <Bold>Klinik Pratama Zaenudin</Bold>, dengan ini mengadakan perjanjian dengan <?php echo $nama_pasien; ?> sebagai berikut:</p>
	<ol>
		<li>
			<?php echo $nama; ?> dengan data sebagai berikut:<br>
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<td>Nomor Telpon</td>
					<td>:</td>
					<td><?php echo $no_telpon; ?></td>
				</tr>
				<tr>
					<td>Pilih Pelayanan</td>
					<td>:</td>
					<td><?php echo $layanan; ?></td>
				</tr>
				<tr>
					<td>Pilih Perawat</td>
					<td>:</td>
					<td><?php echo $perawat; ?></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td><?php echo $tgl; ?></td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td>:</td>
					<td><?php echo $waktu; ?></td>
				</tr>
			</table>
		</li>
		<li>Pelayanan yang akan di terima oleh <?php echo $nama; ?> adalah <?php echo $layanan; ?></li>
		<?php echo $nama; ?> setuju untuk mengikuti saran dan arahan Zaenudin, Ners selama proses perawatan</li>
<li><?php echo $nama; ?> setuju untuk membayar biaya pelayanan kesehatan yang di tentukan oleh Klinik Pratama Zaenudin sesuai dengan tarif yang berlaku.</li>
<li><?php echo $perawat; ?> akan memberikan pelayanan yang terbaik kepada <?php echo $nama; ?> sesuai dengan standar profesi yang berlaku. Perawat yang akan merawat <?php echo $nama_pasien; ?> adalah <?php echo $perawat; ?>.</li>
<li>Perjanjin akan berlaku mulai tanggal <?php echo $tgl = date("d/m/y"); ?> dan dapat di akhiri dengan pemberitahuan sebelumnya oleh salah satu pihak.</li>
</ol>
<p>Demikian surat perjanjian ini dibuat untuk dapat dijadikan sebagai acuan bagi kedua belah pihak.</p>
<p>Hormat kami,</p>
<p>Zaenudin, Ners</p>
<p>Klinik Pratama Zaenudin</p>
</body>
</html>
