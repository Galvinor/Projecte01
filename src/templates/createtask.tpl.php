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
            <div><a href="?url=home">Home</a></div>/<div><a href="?url=dashboard">Dashboard</a></div>/<div><a href="?url=createtask">Task Creation</a></div>
        </div>
        <br>

        <main>
            <form action="?url=createtask_action" method="post">
                <label for="list">Select your list</label>
                <select name="list">
                    <option value="list">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
                <br/>
                <label for="list">Initialize your Imperial task</label> <input type="text" name="task" placeholder="">
                <button type="submit">Create</button>
            </form>
            
        </main>