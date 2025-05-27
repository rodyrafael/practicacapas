<?php
require_once '../datos/DB.php';
require_once '../interfaces/ICliente.php';

class LCliente implements ICliente {
    public function guardar(Cliente $cliente) {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "INSERT INTO cliente (nombre, apellidos, dni, celular, direccion) VALUES (:nombre, :apellidos, :dni, :celular, :direccion)";
        $ps = $cn->prepare($sql);
        $nombre = $cliente->getNombre();
        $apellidos = $cliente->getApellidos();
        $dni = $cliente->getDni();
        $celular = $cliente->getCelular();
        $direccion = $cliente->getDireccion();
        $ps->bindParam(":nombre", $nombre);
        $ps->bindParam(":apellidos", $apellidos);
        $ps->bindParam(":dni", $dni);
        $ps->bindParam(":celular", $celular);
        $ps->bindParam(":direccion", $direccion);
        $ps->execute();
    }

    public function cargar() {
        $db = new DB();
        $cn = $db->conectar();
        $sql = "SELECT * FROM cliente";
        $ps = $cn->prepare($sql);
        $ps->execute();
        $clientes = array();
        $filas = $ps->fetchAll();
        foreach ($filas as $f) {
            $cli = new Cliente();
            $cli->setIdCliente($f[0]);
            $cli->setNombre($f[1]);
            $cli->setApellidos($f[2]);
            $cli->setDni($f[3]);
            $cli->setCelular($f[4]);
            $cli->setDireccion($f[5]);
            array_push($clientes, $cli);
        }
        return $clientes;
    }
}
?>