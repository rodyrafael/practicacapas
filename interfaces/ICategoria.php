<?php
    require '../entidades/Categoria.php';
    interface ICategoria {
        public function guardar(Categoria $categoria);
        public function cargar();
        public function cargarPorFamilia($idfamilia);
    }   
?>