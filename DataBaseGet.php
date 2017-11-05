<?php

require_once 'PHP/Params.php';

try{
   $db= new mysqli($host,$user,$password,$db_name);

   $stat1 = $db->query("SELECT * FROM likes WHERE like_id=1");

   $result1 = $stat1->num_rows;

   $stat2 = $db->query("SELECT * FROM likes WHERE like_id=2");

   $result2 = $stat2->num_rows;

    $stat3 = $db->query("SELECT * FROM likes WHERE like_id=3");

    $result3 = $stat3->num_rows;

   $array = [$result1, $result2, $result3];

    echo json_encode($array);
} catch (Exception $e){

}

?>