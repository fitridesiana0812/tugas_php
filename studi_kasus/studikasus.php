<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<h3>Daftar Nilai</h3>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Kelas</th>
			<th>Nilai</th>
			<th>Hasil</th>
		</tr>
		<?php 
			// membaca file json
			$data = file_get_contents('data.json');

			// konversi json ke array asosiatif
			$json = json_decode($data, true);

			// Daftar nama bulan dalam bahasa Indonesia
			$n_bulan = array(
				1 => 'January',
				2 => 'February',
				3 => 'March',
				4 => 'April',
				5 => 'May',
				6 => 'June',
				7 => 'July',
				8 => 'August',
				9 => 'September',
				10 => 'October',
				11 => 'November',
				12 => 'December'
				);
			
			// looping nomer
			$nomer = 1;
				
			// looping data
			foreach ($json as $data) {
				//menhitung jumlah data
				$jumlah_data = count($data);

				// Mengubah format tanggal lahir menjadi nama bulan, tanggal, dan tahun
				$tanggal = date('d', strtotime($data['tanggal_lahir']));
				$bulan = $n_bulan[date('n', strtotime($data['tanggal_lahir']))];
				$tahun = date('Y', strtotime($data['tanggal_lahir']));

				// menghitung umur dari tanggal lahir
				$tanggal_lahir = date_create($data['tanggal_lahir']);
				$sekarang = date_create();
				$umur = date_diff($tanggal_lahir, $sekarang)->y;

				// menentukan hasil nilai
				if ($data['nilai'] >= 90) {
					$hasil = 'A';
				} elseif ($data['nilai'] >= 80) {
					$hasil = 'B';
				} elseif ($data['nilai'] >= 70) {
					$hasil = 'C';
				} else {
					$hasil = 'D';
				}
		?>
		<tr>
			<td><?php echo $nomer ?></td>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $tanggal .' '. $bulan .' '. $tahun;?></td>
			<td><?php echo $umur . " tahun" ?></td>
			<td><?php echo $data['alamat'] ?></td>
			<td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['nilai'] ?></td>
			<td><?php echo $hasil ?></td>
		</tr>
		<?php 
			$nomer++;
			} 
		?>
	</table>
</body>
</html>
