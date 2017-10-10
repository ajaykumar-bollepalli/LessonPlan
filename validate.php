<?php

    session_start();

    error_reporting(E_ALL & ~E_NOTICE);
    
    header("Content-Type: application/json; charset=UTF-8");
    $creds = json_decode($_POST["x"], true);
    
    $connection = new MongoClient();
    $db = $connection->lesson;

    $coll = $db->clients;
    $uname = $creds[uname];
    
    $pwd = $coll->find(array('uname' => $uname ),array('_id' => 0,'pwd' => 1));
    
    //echo $pwd->count();
    
    foreach ($pwd as $ar)
       $ret_pwd = $ar["pwd"];
    
    //echo json_encode($uname);
    //echo json_encode($ret_pwd);
   
    if ($te_pwd == $creds[pwd]) {
        $_SESSION["logged"]=true;
        $_SESSION["uname"]=$uname;
        echo json_encode("clear");
    }
    else
        echo json_encode("invalid");

?>