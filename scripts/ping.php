<?php
header('Content-Type: application/json; charset=utf-8');
if(isset($_REQUEST['ping'])){
    echo json_encode(['host'=>gethostbyname(htmlentities(preg_replace('/https?:\/\//','',$_REQUEST['ping'])))],JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
}
?>