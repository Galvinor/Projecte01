<?php
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
            <div><a href="?url=home">Home</a></div>/<div><a href="?url=dashboard">Dashboard</a></div>/<div><a href="?url=createlist">List Creation</a></div>
        </div>
        <br>

        <main>
            <form action="?url=createlist_action" method="post">
                <label for="list">Create your tasklist to serve the emperor</label> <input type="text" name="list" placeholder="">
                <button type="submit">Create</button>
            </form>

            
        </main>