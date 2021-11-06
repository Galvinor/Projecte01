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

        <main>
            <form action="?url=createlist_action" method="post">
                <label for="list">Tasklist</label> <input type="text" name="list" placeholder="your tasklist to serve the emperor">
                <button type="submit">Create</button>
            </form>

            <form action="?url=createlist_action" method="post">
                <label for="list">Tasks</label> <input type="text" name="task" placeholder="insert your imperial task">
                <button type="submit">Create</button>
            </form>
            
        </main>