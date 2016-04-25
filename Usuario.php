<?php

Class Usuario {

    var $snombre;
    var $sapellido;
    var $snombUsuario;
    var $sclave;

    public function __construct($snombre = NULL, $sapellido = NULL, $snombusuario, $sclave) {
        $this->nombre = $snombre;
        $this->apellido = $sapellido;
        $this->nombUsuario = $snombusuario;
        $this->clave = $sclave;
    }

    function getSnombre() {
        return $this->snombre;
    }

    function getSapellido() {
        return $this->sapellido;
    }

    function getSnombUsuario() {
        return $this->snombUsuario;
    }

    function getSclave() {
        return $this->sclave;
    }

    function setSnombre($snombre) {
        $this->snombre = $snombre;
    }

    function setSapellido($sapellido) {
        $this->sapellido = $sapellido;
    }

    function setSnombUsuario($snombUsuario) {
        $this->snombUsuario = $snombUsuario;
    }

    function setSclave($sclave) {
        $this->sclave = $sclave;
    }

    public function Acceso() {
        $snombusuario = "admin";
        $sclave = md5("holamundo");

        if ($this->nombre == $snombusuario && $this->clave == $sclave)
            return true;
        else
            return false;
    }

}

?>