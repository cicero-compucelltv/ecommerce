<?php
$sql = new Hcode\DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    echo json_encode($results);