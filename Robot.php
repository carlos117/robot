<?php

/**
* 
*/
class Robot
{
	protected $ubicacionInicialX = 0;
	protected $ubicacionInicialY = 0;
	protected $grados = 90;

	public function avanzar($metrosAAvanzar)
	{
		if($this->grados ==90) {

			$this->ubicacionInicialY+=$metrosAAvanzar;
		} elseif ($this->grados == 0) {
			$this->ubicacionInicialX-=$metrosAAvanzar;
		} elseif ($this->grados == 270) {
			$this->ubicacionInicialY-=$metrosAAvanzar;
		} else {
			$this->ubicacionInicialX+=$metrosAAvanzar;
		}
	} 

	public function girarIzquiera()
	{
		if($this->grados ==90) {
			$this->grados = 0;
		} elseif ($this->grados == 0) {
			$this->grados =270;
		} elseif ($this->grados == 270) {
			$this->grados =180;
		} else {
			$this->grados=90;
		}
	}
	public function girarDerecha()
	{
		if($this->grados ==90) {
			$this->grados = 180;
		} elseif ($this->grados == 180) {
			$this->grados =270;
		} elseif ($this->grados == 270) {
			$this->grados =0;
		} else {
			$this->grados=90;
		}
	}

	public function getUbicacion(){
		return"x: {$this->ubicacionInicialX}y:{$this->ubicacionInicialY}<br><br>";
	}
}

$robot = new Robot();
echo $robot->getUbicacion();
$robot->avanzar(5);
echo $robot->getUbicacion();
$robot->girarIzquiera();
$robot->avanzar(15);
echo $robot->getUbicacion();
$robot->girarDerecha();
$robot->avanzar(10);
echo $robot->getUbicacion();
?>