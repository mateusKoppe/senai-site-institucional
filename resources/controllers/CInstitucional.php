<?php

include_if_file_exists('controllers/Controller.php');

class CInstitucional extends Controller {

	public function AIndex() {
		$this->renderInStructure('VInstitucional');
	}

}