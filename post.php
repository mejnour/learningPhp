<form action="post.php" method="POST">
    Please enter your pass:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

<?php
    $pass = 'pass';

    if(isset($_POST['password']) && !empty($_POST['password'])) {
        if($_POST['password'] == $pass) {
            echo 'Correct!';
        }
    }
?>