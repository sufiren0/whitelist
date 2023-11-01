<?php 
$keys = array("sufixmIcaltopthero-ghoul"); //Add Key here Example: ("test", "asd", "asdasdasd", "gasdasd")
$testing = $_GET["key"];
if (in_array($testing,$keys,TRUE)) {
  echo "true"; 
} else {
  echo "false"; 
}
?>
