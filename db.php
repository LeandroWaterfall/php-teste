<?php
  $db = new Mysqli;

  $db->connect('localhost','corretores', 'root', '');
  if ($db) {
    echo "";
  } else {
    echo "failed";
  } 
?>