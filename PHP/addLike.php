<?php
$id =$_GET['id'];

require_once 'Params.php';

try{
    $db= new mysqli($host,$user,$password,$db_name);

    $stat = $db->query("INSERT INTO likes(like_id) VALUES('$id')");
} catch (Exception $e){

}

?>