<?php
    if(isset($_POST['name'])) {
        $name_post = $_POST['name'];
        if(!empty($name_post)) {
            echo 'Done!';
        } else {
            echo 'Please enter a name';
        }
    }
?>

<html>
<head>

</head>
<body>

<form action="php_embedded_html.php" method="POST">
    Type your name:<br>
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<textarea rows="7" cols="25">
</textarea>

<br><br><br>
<strong>
<?php
    echo 'Bill';
?>

</body>
</html>