<html>
<head>
<title>Demo Model</title>
</head>
<body>
<h2>Model Jajaran Genjang</h2>

<!-- memanggil metode get_radius() dari objek $model -->
nilai Tinggi : <?php echo $model->get_tinggi(); ?><br />
nilai Alas   : <?php echo $model->get_alas(); ?><br />
nilai sisi A : <?php echo $model->get_sisiA(); ?><br />
nilai sisi B : <?php echo $model->get_sisiB(); ?><br />

<!-- memanggil metode hitung_luas() dari objek $model -->
Luas Jajaran Genjang : <?php echo $model->hitung_luas(); ?><br />

<!-- memanggil metode hitung_keliling() dari objek $model -->
Keliling Jajaran Genjang: <?php echo $model->hitung_keliling(); ?>

</body>
<br />
<br />
<a href="Jajaran" method="post">
<!-- <a href = "Jajaran.php"></a> -->
<input type="submit" name="btnSubmit" value="Kembali">
</html>