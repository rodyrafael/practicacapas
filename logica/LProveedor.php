<?php
require '../datos/DB.php';
require '../interfaces/IProveedor.php';

class LProveedor implements IProveedor {
    public function guardar(Proveedor $proveedor) {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "INSERT INTO proveedor (nombre, ruc) VALUES (:nombre, :ruc)";
        $ps = $cn->prepare($sql);
        $nombre = $proveedor->getNombre();
        $ruc = $proveedor->getRuc();
        $ps->bindParam(":nombre", $nombre);
        $ps->bindParam(":ruc", $ruc);
        $ps->execute();
    }

    public function cargar() {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "SELECT * FROM proveedor";
        $ps = $cn->prepare($sql);
        $ps->execute();
        $proveedores = array();
        $filas = $ps->fetchAll();
        foreach ($filas as $f) {
            $prov = new Proveedor();
            $prov->setIdProveedor($f[0]);
            $prov->setNombre($f[1]);
            $prov->setRuc($f[2]);
            array_push($proveedores, $prov);
        }
        return $proveedores;
    }
}
?>