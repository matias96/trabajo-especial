<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1($v)
  {
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2;
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1(20);
$suma->cargar2(25);
$suma->operar();
echo 'El resultado de la suma de 20+25 es:';
$suma->imprimirResultado();
$resta=new Resta();
$resta->cargar1(50);
$resta->cargar2(20);
$resta->operar();
echo 'El resultado de la diferencia de 50-20 es:';
$resta->imprimirResultado();

?>
</body>
</html>
