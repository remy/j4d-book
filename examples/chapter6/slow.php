<?php
if (file_exists(@$_GET['file'])) {
  sleep(@$_GET['timeout']);
  header('Location: ' . @$_GET['file']);
}
?>