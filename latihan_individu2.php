<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table border="1">
        <tr style="background-color: blue;">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    <?php
        for($i=1; $i<=10; $i++){ //looping untuk 10 baris
            if ($i % 2 == 0) {
                echo "<tr>";
            } else {
                echo "<tr style='background-color: gray;'>";
            }
            echo "<td>".$i."</td>"; //tampilkan nomor
            echo "<td>Nama ke ".$i."</td>"; //tampilkan nama ke-i
            echo "<td>Kelas ".(11-$i)."</td>"; //tampilkan kelas
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
