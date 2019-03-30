<?php

$conn = new mysqli('localhost','root', '','medik');

if(isset($conn->connect_error)){
    echo $error->$conn->connect_error;
}
