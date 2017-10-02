<?php
spl_autoload_register(function ($className){
  require '../classes/'.strtolower($className).'.php';
});

?>
