<?php
$inOrder = false;

function getConnection(){
    $servername  = 'localhost';

    $username = 'thedirtyham';

/*** mysql password ***/
    $password = 'PAnthony38';

    $dbname = 'courses';

    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}
function getQuery($sql){
    $conn = getConnection();
    $result = $conn->query($sql);
    return $result;
}

function orderByName(){
    $inOrder = true;
}

?>
