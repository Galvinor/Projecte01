<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';
    require APP.'/src/db/database.php';

    $inTask= filter_input(INPUT_POST, 'task');
    $uList= filter_input(INPUT_POST, 'list');

    if ($inTask != null) {

    $gdb= getConnection($dsn, $dbuser, $dbpasswd);

    $user=$_SESSION['username'];
    
    $table= 'TASKStest';


    insertTask($gdb,$table,$inTask,$uList);

    header("Location: ?url=dashboard");
    

    } else {

        header("Location: ?url=badlogin");
    }