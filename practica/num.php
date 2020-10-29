<?php

include_once "ConexionBD.php";

class num
{
    private $numin;

    public function getNumin()
    {
        return $this->numin;
    }

    public function setNumin($id): void
    {
        $this->numin = $numin;
    }

    public function insertar(int $numin): bool
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO figuras(num) 
                    VALUES(?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $numin, PDO::PARAM_STR);

            $stmt->execute();
            $filasAfectadas = $stmt->rowCount();

            if($filasAfectadas != 0){
                $resultado = true;
            }else{
                $resultado = false;
            }

            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    
}