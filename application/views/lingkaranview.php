<html>
<head>
<title>Demo Model</title>
</head>
<body>
<h2>Model Lingkaran</h2>

<!-- memanggil metode get_radius() dari objek $model -->
nilai jari-jari : <?php echo $model->get_radius(); ?><br />

<!-- memanggil metode hitung_luas() dari objek $model -->
Luas Lingkaran : <?php echo $model->hitung_luas(); ?><br />

<!-- memanggil metode hitung_keliling() dari objek $model -->
Keliling Lingkaran: <?php echo $model->hitung_keliling(); ?>

</body>
$this->load->view('lingkaran_form_view');
<input type="submit" name="btnSubmit" value="Kembali">


</html>