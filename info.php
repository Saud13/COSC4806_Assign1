
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
Password: <input type="text" name="Password"><br>
<input type="submit">
</form>

</body>


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

