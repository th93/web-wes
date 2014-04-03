<?php

class Contacto extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function mostrar_contacto() {
        $datos['titulo'] = 'Contacto';
        $datos['contenido'] = 'form_contacto';
        $this->load->view('plantillas/plantilla', $datos);
    }

}
