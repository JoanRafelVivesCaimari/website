<?php

class Usuari{

 public function crearNuevoUsuario($nombre, $contraseña, $email, $direccion, $localidad, $codigo_postal){
    $conn =\ DatabaseConnection::connect();
    $sql = "INSERT INTO Usuari SET nom=?, contrasenya=?, email=?, localitat=?, adreça=?, codi_postal=?";
    $stmt = $conn->prepare($sql);
    $parametros = [
        $nombre,
        $contraseña,
        $email,
        $localidad,
        $direccion,
        $codigo_postal,
    ];
    $stmt->execute($parametros);
    $usuariocreado = $stmt->rowCount();
    return $usuariocreado;
    }

    public function buscarUsuarioPorID($id){
        $conn =\ DatabaseConnection::connect();
        $sql = "SELECT * 
                FROM Usuari 
                WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}
 ?>
