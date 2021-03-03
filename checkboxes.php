<form action="checkboxes.php" method="POST">
    <input type="checkbox" name="agree"/> I agree!<br>
    <input type="submit" value="Submit">
</form>

<?php
    if(isset($_POST['agree']) && $_POST['agree'] == 'on') {
        echo 'Set, and correct value.';
    }
?>
