<?php
require APP.'/lib/conn.php';
require APP.'/src/db/database.php';
$gdb= getConnection($dsn, $dbuser, $dbpasswd);
$uname=$_SESSION['username'];
$ulist= "opel";
include 'header.tpl.php';

    
?>
            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="?url=logout">Log out</a>
                </li>
            </ul>

        </aside>

        <div class="breadcrumb">
            <div><a href="?url=home">Home</a></div>/<div><a href="?url=dashboard">Dashboard</a></div>
        </div>
        <br>
        <section class='dashboard'>
            <h2 id='welcome' >Welcome, recruit <?= $_SESSION['username'];  ?>!</h2>

            <article class="tasklists">
                <div class="overview"> 
                    <h3>Overview</h3> 
                
                </div>
                <div class="lists">
                    <h3>Lists</h3>
                    <div>
                        <?= showList($gdb,$uname) ?>
                    </div>
                    <br/>
                    <a href="?url=createlist"><button type="submit" id="create_list">Create List</button></a>
                    
                </div>
                <div class="tasks">
                    <h3>Tasks</h3>
                    <div>
                    <?= showTask($gdb,$ulist) ?>
                    </div>
                    <br/>
                    <a href="?url=createtask"><button type="submit" id="create_task">Create Task</button></a>
                </div>
            </article>
        </section>



        
    </body>
</html>