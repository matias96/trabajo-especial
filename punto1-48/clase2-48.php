<!doctype html>
<html>
<head>
  <title>Alta</title>
</head>  
<body>
  <?php
    $mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

    $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
	  die($mysql->error);
	  
    $mysql->close();

    echo 'El nuevo rubro se almacenó';	
  ?>  
</body>
</html>