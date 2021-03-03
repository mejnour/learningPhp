<form action = "get.php" method = "GET">
    Name:<br><input type = "text" name = "name"><br>
    Age:<br><input type = "text" name = "age" size = "5"><br><br>
    
    <input type = "submit" value="Submit">
</form>

<?php
    $name = $_GET['name'];
    $age = $_GET['age'];

    if(isset($name) && !empty($name) && isset($age) && !empty($age)) {
        echo 'I am ' . $name . ' and ' . $age . ' years old';
    } else {
        echo 'Please enter something';
    }
?>