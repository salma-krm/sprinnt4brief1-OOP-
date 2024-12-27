<?php 
// require 'vendor/autoload.php';
// use src\MyClass;
// use src\app\Test;
// new Test();
// new MyClass();

function load($nomDeclass) {
     
    include '.project/' . $class . '.php';
}
spl_autoload_register('load');  
include "./projet/Man.php";
include "./projet/Contact.php";
// new Man();
// new Contact();
 
?>
