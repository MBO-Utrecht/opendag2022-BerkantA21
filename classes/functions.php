<?php

function load_class($classname)
{
    $pathToFile = './classes/' . $classname . '.php';
    if (file_exists($pathToFile))
    {
        require($pathToFile);
    } else{
        echo "Class is niet gevonden";
    }
}

spl_autoload_register('load_class');

?>