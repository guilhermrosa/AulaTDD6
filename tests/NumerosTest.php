<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumerosTest extends TestCase{
	
	public function testMaior(){
		
		$array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

	 	$this->assertEquals($array->maior(), 3);


			
							
	}
	
	

	public function testMenor(){
		
		$array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

	 	$this->assertEquals($array->menor(), 1);
	 }

	 	public function TestProduto(){

		$array = new Numeros();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(3);

		$this->assertEquals($array->produto(),18);

	}
	public function TestContar(){

		$array = new Numeros();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(3);


		$this->assertEquals($array->contar(3), 2);

							
	}

			
							
	}
}




?>