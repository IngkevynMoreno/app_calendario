<?php
//comenzamos declarando el nombre de la clse
class conexion
{
    //creamos los atributos de la clase
    private $server  = "10.0.20.189";
    private $user = "root";
    private $password = "Jailton81*";
    private $database = "calendarios";
    private $port = "3306";
    public $conexion;

    public function test()
    {
        return $this->conexion;
    }


    //declaramos el contructor 
    function __construct()
    {

        try {
            $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
            $this->conexion->set_charset('utf8mb4');
            if ($this->conexion->connect_error) {
                throw new Exception();
                die();
            }
        } catch (Exception $e) {
            echo json_encode(array('ERROR' => $e->getMessage()));
            // echo$e->getMessage();
            exit;
        }
    }

}
