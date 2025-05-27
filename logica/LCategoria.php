<?php
    require '../datos/DB.php';
    require '../interfaces/ICategoria.php';

    class LCategoria implements ICategoria {
        public function guardar(Categoria $categoria) {
            $db = new DB();
            $cn = $db->conectar();
            $sql = "INSERT INTO categoria (nombre, idfamilia) VALUES (:nom, :idfam)";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":nom", $categoria->getNombre());
            $ps->bindParam(":idfam", $categoria->getIdFamilia());
            $ps->execute();
        }

        public function cargar() {
            $db = new DB();
            $cn = $db->conectar();
            $sql = 'SELECT * FROM categoria';
            $ps = $cn->prepare($sql);
            $ps->execute();
            $categorias = array();
            $filas = $ps->fetchAll();
            foreach ($filas as $f) {
                $cat = new Categoria();
                $cat->setIdCategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdFamilia($f[2]);
                array_push($categorias, $cat);
            }
            return $categorias;
        }

        public function cargarPorFamilia($idfamilia) {
            $db = new DB();
            $cn = $db->conectar();
            $sql = 'SELECT * FROM categoria WHERE idfamilia = :idfamilia';
            $ps = $cn->prepare($sql);
            $ps->bindParam(':idfamilia', $idfamilia);
            $ps->execute();
            $categorias = array();
            $filas = $ps->fetchAll();
            foreach ($filas as $f) {
                $cat = new Categoria();
                $cat->setIdCategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdFamilia($f[2]);
                array_push($categorias, $cat);
            }
            return $categorias;
        }
    }
?>