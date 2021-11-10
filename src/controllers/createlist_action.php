<?php

    require APP.'/lib/render.php';
    require APP.'/lib/conn.php';
    require APP.'/src/db/database.php';

    $inList= filter_input(INPUT_POST, 'list');

    if ($inList != null) {

    $gdb= getConnection($dsn, $dbuser, $dbpasswd);

    $user=$_SESSION['username'];
    
    $table= 'LISTS';

    insertList($gdb,$table,$user,$inList);

    header("Location: ?url=dashboard");
    

    } else {

        header("Location: ?url=badlogin");
    }