<?php

    class Route {
        private $path;
        private $usesDB;

        public function __construct(string $path, bool $usesDB = false) {
            $this->path = $path;
            $this->usesDB = $usesDB;
        }

        public function getUsesDB() {
            return $this->usesDB;
        }

        public function getPath() {
            return $this->path;
        }
    }

    function getRouter() {
        return [
            "llistar-categories" => new Route("categories.php", true),
            "portada" => new Route("index.php", true),
            "404" => new Route("404.php", true),
            "llistar-productes" => new Route("producte.php", true),
            "info-producte" => new Route("infoproducte.php", true),
            "guardar-registre" => new Route("registre_usuari.php", true)
        ];
    }
