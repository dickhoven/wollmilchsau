<?php

function autoload($classname)
{
  if (file_exist(".src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}
spl_autoload_register("autoload");

 ?>
