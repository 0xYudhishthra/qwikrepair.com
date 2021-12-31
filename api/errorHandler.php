<?php
function errorHandler($httpStatusCode, $errorMessage){
    http_response_code($httpStatusCode);
    echo $errorMessage;
    exit();
}
?>