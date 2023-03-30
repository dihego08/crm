<?php
$accion = $_GET['parAccion'];
include("env.php");
if ($accion == "lista_eventos") {
    $query = $mbd->prepare("SELECT * FROM events");
    $query->execute();

    $values = array();

    while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
        $values[] = $res;
    }



    /*$query = $mbd->prepare("SELECT c.*, ci.ciclo FROM cursos_2 as c, ciclos as ci WHERE c.id_ciclo = ci.id");
    $query->execute();
    $values = array();
    while ($res = $query->fetch(PDO::FETCH_ASSOC)) {*/

    echo json_encode($values);
}
