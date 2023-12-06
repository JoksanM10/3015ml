<?php

class ProductModel {

    $sql = "INSERT INTO producto (nombre, suplidor, cantidad, precio)
    VALUES (:nombre, :suplidor, :cantidad, :precio)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(':nombre', $data['nombre'], PDO::PARAM_STR);
    $stmt->bindValue(':suplidor', $data[suplidor], PDO::PARAM_STR);
    $stmt->bindValue(':cantidad', $data['cantidad'], PDO::PARAM_STR);
}
?>