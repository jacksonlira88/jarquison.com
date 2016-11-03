<?php

class TesteController extends Controller{
	public function index(){
		echo "Chamando a sessão index de Teste";
	}

	public function acao(){
		//echo  $this->get_parameter(0);
		$v = new View("teste/acao");
		$c = $this->load_model("Carro");
		$c->setRoda(20);
		$v->add_variable("carro", $c);
		$v->show();
	}
}
