<form action="radiobuttn.php" method="get">
    <p>
        <input type="radio" name="language" value="PHP">PHP<br>
        <input type="radio" name="language" value="C">C<br>
        <input type="radio" name="language" value="BASIC">BASIC<br>
    </p>
    <p>
        <input type="submit" value="Submit">
    </p>
</form>

<?php
    if(isset($_GET['language'])) {
        echo 'Set!';
    }
?>