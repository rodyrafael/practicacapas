<?php
    class DB{
        private $url = 'mysql:host=localhost;dbname=ventasweb;charset=utf8';
        private $user = 'root';
        private $password = '';

        public function conectar(){
            try {
                $cn = new PDO($this->url, $this->user, $this->password);
                $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $cn;
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
    }
?>

