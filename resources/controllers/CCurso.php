<?php

require 'Controller.php';

class CCurso extends Controller{
		
	public function AIndex(){
		$this->renderInStructure("VCursoIndex");
	}

	public function ADetalhes(){
		$this->renderInStructure("VCursoDetails", [
			'id' => $this->getParams(1)
		]);
	}
		
}
