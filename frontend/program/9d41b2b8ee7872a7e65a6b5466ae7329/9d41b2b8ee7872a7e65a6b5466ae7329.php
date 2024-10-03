<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  

</body>
</html>
