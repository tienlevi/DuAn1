<?php
function loadAllTk(){
    $sql = "SELECT * FROM user";
    $listtk = pdo_query($sql);
    pdo_query($sql);
    return $listtk;
}
?>