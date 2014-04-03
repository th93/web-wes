<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Articulos_model');
    }

    //Este método llama a la página principal
    function index() {
        $datos['articulos'] = $this->Articulos_model->lista_articulos();
        $datos['titulo'] = 'Levi'.'s® - España';
        $datos['contenido'] = 'index';
        $this->load->view('plantillas/plantilla', $datos);
    }

    // Muestra un artículo por ID
//    function detalle_articulo($id_articulo) {
//        $id_limpio = $this->security->xss_clean($id_articulo);
//        $datos['detalle'] = $this->Articulos_model->detalle_articulo($id_limpio);
//        $datos['titulo'] = $datos['detalle']->nombre_articulo;
//        $this->load->view('detalle', $datos);
//    }
    // Muestra un articulo por nombre
//        function detalle_articulo($nombre_articulo) {
//            $nombre_limpio = str_replace('-',' ',$nombre_articulo);
//            $datos['detalle'] = $this->Articulos_model->detalle_articulo($nombre_limpio);
//            $datos['titulo'] = $datos['detalle']->nombre_articulo;
//            $this->load->view('detalle', $datos);
//        }
    // Muestra un articulo por url
    function detalle_articulo($url_articulo) {
        $url_limpia = $this->security->xss_clean($url_articulo);
        $datos['detalle'] = $this->Articulos_model->detalle_articulo($url_limpia);
        $datos['titulo'] = 'Levi'.'s® - España';
        $datos['contenido'] = 'detalle';
        $this->load->view('plantillas/plantilla', $datos);
    }

}

