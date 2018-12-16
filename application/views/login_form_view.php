<html>
<head>
<title>Demo Otentikasi User</title>
</head>
<body>
<h3>Demo Otentikasi User  </h3>
<form action="Login" method="post">

<?php echo $model->labels['pengguna_id']; ?> <br />
<input type="text" name="pengguna_id" size="25" maxlength="30" />
<br />

<?php echo $model->labels['pengguna_sandi']; ?> <br />
<input type="password" name="pengguna_sandi" size="25" maxlength="25" />
<br />
<br />

<input type="submit" name="btnSubmit" value="Login" />

</form>
</body>
</html>
