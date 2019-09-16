<?php
function conn() {
    $cnx = mysqli_connect("localhost", "id10834365_mariana", "marbeurbanMB", "id10834365_marbeurban");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}