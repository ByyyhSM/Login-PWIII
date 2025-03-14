<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function __construct(){
        $dns    = "mysql:dbname:Usuario;host=localhost";
        $dbuser = "root";
        $dbPass = "";
        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
        
    }
}