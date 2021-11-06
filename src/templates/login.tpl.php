<?php
include 'header.tpl.php';
$email=filter_input(INPUT_COOKIE,'email');
$passwd=filter_input(INPUT_COOKIE,'passwd');
?>


            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>

        </aside>

        <div class="breadcrumb">
            <div><a href="?url=home">Home</a></div>/<div><a href="?url=login">Log In</a></div>
        </div>
        
        <h2>Welcome, visitor! Log in to view your academy record!</h2>
        
        
        <main>
            <form action="?url=login_action" method="post">
                <input type="text" name="email" placeholder="e-mail" value=<?php echo $email?>>
                <input type="password" name="passwd" placeholder="Password" value=<?php echo $passwd?>>
                <button type="submit">Login</button>
                <br/>
                Do you want the Empire to remind you your credentials? <input type="checkbox" name="remind">
                


            </form>
            
        </main>
    </body>
</html>