<?php
require_once 'db/database.php';

class UsuarioDAO{
    public $db_con;
    public function __construct(){
        $this->db_con=Database::connect();
    }
    public function getUser($usuario, $contrasena) {
        $stmt = $this->db_con->prepare("SELECT * FROM Usuarios WHERE username = ? AND password = ?");
        $stmt->execute([$usuario, $contrasena]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return empty($result) ? null : $result;
    }
    
}

?>