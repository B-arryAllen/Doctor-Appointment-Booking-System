<!DOCTYPE html>
<html>
<body>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+2 days");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>